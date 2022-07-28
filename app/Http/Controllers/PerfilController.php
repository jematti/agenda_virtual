<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('auth.edit');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'celular' => 'required',
        ]);

        $user=User::find(auth()->user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->celular = $request->celular;
        $user->telefono = $request->telefono;
        $user->departamento = $request->departamento;
        $user->puesto = $request->puesto;
        $user->save();


        return redirect()->route('contactos')->with('status', 'Perfil Actualizado');
    }
/*
    public function changePassword()
    {
        return view('perfil.changepassword');
    }

    public function updatePassword(Request $request)
    {
        # Validacion
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        #Comparar con la contraseña actual
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "¡la Contraseña puesta no coincide con la actual!");
        }

        #actualizar contraseña
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with("status", "¡Contraseña Cambiada Exitosamente!");
    }
*/



}
