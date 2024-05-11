<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator; // Utilisez cette classe à la place
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return back()->withInput()->with('errors', $validator->errors()->messages());
        }
        if ($validator->fails()) {
            dd($validator->errors());
        }


        $signalant = $this->create($request->all());
        Auth::login($signalant);
        return redirect()->route('user.index');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string','min:8', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $signalant = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return $signalant;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.index');
        }

        return back()->withErrors(['email' => 'Les informations de connexion ne sont pas valides.']);
    }

    public function logout()
    {
        return redirect()->route('index');
    }

    public function index()
    {
        // recupéré l'utilisateur connecté
        $user = Auth::user();
        return view('users.index', compact('user'));
    }

    public function postIndex()
    {
        // recupéré l'utilisateur connecté
        $user = Auth::user();
        return view('users.post', compact('user'));
    }
}
