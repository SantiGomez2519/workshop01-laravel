<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomUserController extends Controller
{
    /**
     * Mostrar el formulario de creación (Actividad 2)
     */
    public function create()
    {
        return view('custom_users.create');
    }

    /**
     * Almacenar el nuevo usuario (Actividad 3)
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:custom_users,email',
            'password' => 'required|string|min:6',
            'payment_method' => 'required|string|max:255'
        ]);

        CustomUser::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'payment_method' => $request->payment_method
        ]);

        return redirect()->route('home.index')
            ->with('success', 'Elemento creado satisfactoriamente');
    }

    /**
     * Listar todos los usuarios (Actividad 4)
     */
    public function list()
    {
        $customUsers = CustomUser::all();
        return view('custom_users.list', compact('customUsers'));
    }

    /**
     * Mostrar un usuario específico (Actividad 5)
     */
    public function show($id)
    {
        $customUser = CustomUser::findOrFail($id);
        return view('custom_users.show', compact('customUser'));
    }

    /**
     * Eliminar un usuario (Actividad 6)
     */
    public function destroy($id)
    {
        $customUser = CustomUser::findOrFail($id);
        $customUser->delete();

        return redirect()->route('custom-users.list')
            ->with('success', 'Usuario eliminado correctamente');
    }
}
