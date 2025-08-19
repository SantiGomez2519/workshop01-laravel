<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Mostrar la página de inicio principal
     */
    public function index()
    {
        // Obtener usuarios recientes
        $recentUsers = CustomUser::latest()->take(3)->get();
        
        return view('home.index', compact('recentUsers'));
    }
}
