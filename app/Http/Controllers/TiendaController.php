<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Tienda;

class TiendaController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendas = Tienda::paginate(6);
        return view('admin.tienda.index', compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tienda = new Tienda();
        return view('admin.tienda.create', compact('tienda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'tipo' => 'required',

        ]);

        Tienda::create([
            'nombre' => $request->input('nombre'),
            'tipo' => $request->input('tipo'),

        ]);

        //return redirect('/users');
        return redirect()->route('tienda2')->with('success', 'Tienda Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tienda = Tienda::find($id);
        return view('admin.tienda.show', compact('tienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tienda = Tienda::find($id);
        return view('admin.tienda.edit', compact('tienda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'tipo' => 'required',

        ]);

        $tienda = Tienda::find($id);

        $tienda->update([
            'nombre' => $request->input('nombre'),
            'tipo' => $request->input('tipo'),
        ]);

        return redirect()->route('tienda2')->with('success', 'Tienda Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Tienda::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('tienda2')->with('warning', 'No se puede eliminar dicha tienda ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('tienda2')->with('success', 'Tienda Eliminado');
    }
}
