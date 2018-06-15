<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Oferta;

class OfertaController extends Controller
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
        $ofertas = Oferta::paginate(6);
        return view('admin.oferta.index', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oferta = new Oferta();
        return view('admin.oferta.create', compact('oferta'));
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
            'descripcion' => 'required',
            'porcentaje' => 'required',
            'fechaInicio' => 'required',
            'fechaFin' => 'required'
        ]);

        Oferta::create([
            'descripcion' => $request->input('descripcion'),
            'porcentaje' => $request->input('porcentaje'),
            'fechaInicio' => $request->input('fechaInicio'),
            'fechaFin' => $request->input('fechaFin')
        ]);

        //return redirect('/users');
        return redirect()->route('oferta2')->with('success', 'Oferta Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oferta = Oferta::find($id);
        return view('admin.oferta.show', compact('oferta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oferta = Oferta::find($id);
        return view('admin.oferta.edit', compact('oferta'));
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
            'descripcion' => 'required',
            'porcentaje' => 'required',
            'fechaInicio' => 'required',
            'fechaFin' => 'required'
        ]);

        $oferta = Oferta::find($id);

        $oferta->update([
            'descripcion' => $request->input('descripcion'),
            'porcentaje' => $request->input('porcentaje'),
            'fechaInicio' => $request->input('fechaInicio'),
            'fechaFin' => $request->input('fechaFin')
        ]);

        return redirect()->route('oferta2')->with('success', 'Oferta Actualizado');
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
            Oferta::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('oferta2')->with('warning', 'No se puede eliminar dicho Oferta ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('oferta2')->with('success', 'Oferta Eliminado');
    }
}
