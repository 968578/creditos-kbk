<?php

namespace App\Http\Controllers;

use App\Models\StatusDebtor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        // User::create([
        //     'name' =>'Cristina Zapata',
        //     'username' => 'cristina.zapata',
        //     'password' => Hash::make('apolo1205')
        // ]);

        // Amount::create([
        //     'amount' => '10000',
        //     'name' => 'Fondo KBK'
        // ]);

        // StatusDebtor::create([
        //     'name' => 'Activo'
        // ]);

        // StatusDebtor::create([
        //     'name' => 'Inactivo'
        // ]);

        // StatusDebtor::create([
        //     'name' => 'En Espera'
        // ]);


        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (!auth()->attempt($request->only('username', 'password'))) {
            return back()->with('mensaje', 'Usuario o contraseña incorrecto');
        }

        return redirect()->route('home');
    }
}
