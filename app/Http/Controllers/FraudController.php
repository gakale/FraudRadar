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
use Illuminate\Support\Facades\File;

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
            'image_ids.*' => 'string',  // Modifier ici pour valider comme chaîne
        ]);

        // Configurer HTMLPurifier
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        // Purifier la description
        $clean_description = $purifier->purify($request->description);
        $fraudData = [
            'name' => $request->name,
            'description' => $clean_description,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'tags' => $request->tags,
            'video' => $request->video,
            'url' => $request->url,
        ];

       // Traitement des images
    $images = [];
    foreach ($request->input('image_ids') as $tempUrlJson) {
        Log::info('Temp URL JSON: ' . $tempUrlJson);

        $tempUrlData = json_decode($tempUrlJson, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('Erreur de décodage JSON: ' . json_last_error_msg());
            return redirect()->back()->withErrors(['image_ids' => 'Un des fichiers image est invalide.']);
        }

        $tempUrl = $tempUrlData['url'];

        Log::info('Temp URL: ' . $tempUrl);

        $tempPath = str_replace('/storage', storage_path('app/public'), $tempUrl);

        if (!file_exists($tempPath) || !getimagesize($tempPath)) {
            return redirect()->back()->withErrors(['image_ids' => 'Un des fichiers image est invalide.']);
        }

        $filename = Str::random(40) . '.' . pathinfo($tempPath, PATHINFO_EXTENSION);

        // Utiliser File::copy pour copier le fichier
        $destinationPath = storage_path('app/public/frauds/' . $filename);
        if (!File::copy($tempPath, $destinationPath)) {
            Log::error('Erreur lors de la copie du fichier: ' . $tempPath . ' vers ' . $destinationPath);
            return redirect()->back()->withErrors(['image_ids' => 'Erreur lors de la copie d\'un fichier image.']);
        }

        $images[] = [
            'path' => Storage::url('public/frauds/' . $filename),
            'file_name' => $filename,
            'file_size' => File::size($destinationPath),
            'file_type' => File::mimeType($destinationPath),
        ];
    }

    $fraudData['images'] = json_encode($images);

    // Enregistrer la fraude avec les images
    $fraud = Fraud::create($fraudData);

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
        preg_match('/"file_name":"([^"]+)"/', $fraud->images, $matches);
        $imageName = $matches[1] ?? null; // Extrait le nom ou null si non trouvé
        $firstImagePath = isset($images[0]['path']) ? $images[0]['path'] : null;
        $content = $fraud->description;
        $view_count = $fraud->increment('view_count');
        $wordsPerMinute = 200; // Nombre moyen de mots lus par minute
        $wordCount = str_word_count(strip_tags($content)); // Compter le nombre de mots dans le contenu
        $estimatedTime = ceil($wordCount / $wordsPerMinute); // Calculer le temps estimé en minutes
        $shareUrl = "https://yourwebsite.com/frauds/$fraud->slug";
        // nombre de commentaires sur le fraud
        $commentCount = $fraud->comments()->count();
        return view('fraud.show', compact('fraud', 'estimatedTime', 'shareUrl', 'commentCount', 'firstImagePath', 'imageName', 'view_count'));
    }
}
