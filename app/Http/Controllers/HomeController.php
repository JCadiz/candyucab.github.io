<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $rol = $user->roles->implode('name');
       // comprobar si trae los roles de los usuarios
       // dd($rol);

        switch($rol){
            case 'admin':
                $saludo = 'bienvenido Aministrador';
                return view('admin.home', compact('rol','saludo'));
            break;
            case 'vendedor':
                $saludo = 'bienvenido vendedor';
                return view('home', compact('saludo'));
            break;
            case 'gerente':
                $saludo = 'bienvenido gerente';
                return view('home', compact('saludo'));
            break;
            case 'dueño':
                $saludo = 'bienvenido dueño';
                return view('home', compact('saludo'));
            break;
            default:
                $saludo = 'bienvenido Cliente';
                return view('home', compact('saludo'));
            break;
        }

    }

}
