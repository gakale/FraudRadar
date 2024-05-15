<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Fraud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use HTMLPurifier;
use HTMLPurifier_Config;

class FraudController extends Controller
{
    public function create()
    {
        $categories = Categorie::all();
        return view('fraud.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'tags' => 'nullable|string',
            'video' => 'nullable|url',
            'url' => 'nullable|url',
            'image_ids' => 'nullable|array',
            'image_ids.*' => 'url',
        ]);

        // Configurer HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        // Purifier la description
        $clean_description = $purifier->purify($request->description);

        $fraud = new Fraud([
            'name' => $request->name,
            'description' => $clean_description,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'tags' => $request->tags,
            'video' => $request->video,
            'url' => $request->url,
        ]);

        $fraud->save();

        if ($request->has('image_ids')) {
            $images = [];
            foreach ($request->input('image_ids') as $tempUrlJson) {
                // 1. Décoder la chaîne JSON
                $tempUrlData = json_decode($tempUrlJson, true);

                // 2. Extraire l'URL
                $tempUrl = $tempUrlData['url'];

                // 3. Reconstruire le chemin du fichier temporaire
                $tempPath = str_replace('/storage', storage_path('app/public'), $tempUrl);

                // 4. Valider le fichier
                if (!file_exists($tempPath) || !getimagesize($tempPath)) {
                    $fraud->delete();
                    return redirect()->back()->withErrors(['image_ids' => 'Un des fichiers image est invalide.']);
                }

                // 3. Générer un nom de fichier unique
                $filename = Str::random(40) . '.' . pathinfo($tempPath, PATHINFO_EXTENSION);

                // 4. Déplacer le fichier vers le dossier final
                Storage::move($tempPath, 'public/frauds/' . $filename);

                // 5. Ajouter les informations de l'image au tableau $images
                $images[] = [
                    'path' => Storage::url('public/frauds/' . $filename),
                    'file_name' => $filename,
                    'file_size' => Storage::size('public/frauds/' . $filename),
                    'file_type' => Storage::mimeType('public/frauds/' . $filename),
                ];
            }

            $fraud->images = $images;
            $fraud->save();
        }

        return redirect()->route('home')->with('success', 'Fraud reported successfully.');
    }


    public function tmpUpload(Request $request)
{
    Log::info('Les données de la requête sont : ' . print_r($request->all(), true));
    if ($request->hasFile('image_ids')) {
        $file = $request->file('image_ids')[0];
        $mimeType = mime_content_type($file->getPathname());
        // Vérifier si le type MIME est valide
        if (strpos($mimeType, 'image/') !== 0) {
            return response()->json(['error' => 'Le fichier uploadé n\'est pas une image valide.'], 400);
            Log::error('Le fichier uploadé n\'est pas une image valide.');
        }
        $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $folder = 'temp/' . uniqid() . '_' . now()->timestamp;
        $path = $file->storeAs($folder, $filename, 'public');

        // Construisez l'URL complète avec asset()
        $url = asset('storage/' . $path);

        return response()->json(['url' => $url]);
    }
    return response()->json(['error' => 'Aucun fichier uploadé.']);
    }

    public function index()
    {

        $frauds = Fraud::where('status', 'active')->get();
                // recupéré le nombre de fraud
        $fraudCount = Fraud::where('status', 'active')->count();



        return view('fraud.index', compact('frauds', 'fraudCount'));
    }

    public function show($slug)
    {
        $fraud = Fraud::where('slug', $slug)->first();
        $content = $fraud->description;
        $wordsPerMinute = 200; // Nombre moyen de mots lus par minute
        $wordCount = str_word_count(strip_tags($content)); // Compter le nombre de mots dans le contenu
        $estimatedTime = ceil($wordCount / $wordsPerMinute); // Calculer le temps estimé en minutes
        $shareUrl = "https://yourwebsite.com/frauds/$fraud->slug";
        // nombre de commentaires sur le fraud
        $commentCount = $fraud->comments()->count();
        return view('fraud.show', compact('fraud', 'estimatedTime', 'shareUrl', 'commentCount'));
    }
}
