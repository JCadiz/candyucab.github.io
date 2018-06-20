<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Juridico;

class JuridicoController extends Controller
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
        $juridicos = Juridico::paginate(6);
        return view('admin.juridico.index', compact('juridicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $juridico = new Juridico();
        return view('admin.juridico.create', compact('juridico'));
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rif' => 'required',
            'paginaWeb' => 'required',
            'capital' => 'required',
            'denominacion' => 'required',
            'razonSocial' => 'required',

        ]);

        Juridico::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'rif' => $request->input('rif'),
            'paginaWeb' => $request->input('paginaWeb'),
            'capital' => $request->input('capital'),
            'denominacion' => $request->input('denominacion'),
            'razonSocial' => $request->input('razonSocial'),
        ]);

        //return redirect('/users');
        return redirect()->route('juridico')->with('success', 'cliente Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juridico = Juridico::find($id);
        return view('admin.juridico.show', compact('juridico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $juridico = Juridico::find($id);
        return view('admin.juridico.edit', compact('juridico'));
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rif' => 'required',
            'paginaWeb' => 'required',
            'capital' => 'required',
            'denominacion' => 'required',
            'razonSocial' => 'required',
            'Sapellido' => 'required',
        ]);

        $juridico = Juridico::find($id);

        $juridico->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'rif' => $request->input('rif'),
            'paginaWeb' => $request->input('paginaWeb'),
            'capital' => $request->input('capital'),
            'denominacion' => $request->input('denominacion'),
            'razonSocial' => $request->input('razonSocial'),
        ]);

        return redirect()->route('juridico')->with('success', 'Cliente Juridico Actualizado');
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
            Juridico::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('juridico')->with('warning', 'No se puede eliminar dicho Cliente Juridico ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('juridico')->with('success', 'Cliente Juridico Eliminado');
    }
}
