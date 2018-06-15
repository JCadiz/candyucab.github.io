<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Natural;

class NaturalController extends Controller
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
        $naturales = Natural::paginate(6);
        return view('admin.natural.index', compact('naturales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $natural = new Natural();
        return view('admin.natural.create', compact('natural'));
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
            'rif' => 'required',
            'descripcion' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'fk_lugar' => 'required'
        ]);

        Natural::create([
            'rif' => $request->input('rif'),
            'cedula' => $request->input('cedula'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'fk_lugar' => $request->input('fk_lugar'),
        ]);

        //return redirect('/users');
        return redirect()->route('natural')->with('success', 'Cliente Natural Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
