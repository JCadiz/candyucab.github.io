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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'rif' => 'required',
            'cedula' => 'required',
            'Pnombre' => 'required',
            'Snombre' => 'required',
            'Papellido' => 'required',
            'Sapellido' => 'required',
        ]);

        Natural::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'rif' => $request->input('rif'),
            'cedula' => $request->input('cedula'),
            'Pnombre' => $request->input('Pnombre'),
            'Snombre' => $request->input('Snombre'),
            'Papellido' => $request->input('Papellido'),
            'Sapellido' => $request->input('Sapellido'),
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
        $natural = Natural::find($id);
        return view('admin.natural.show', compact('natural'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $natural = Natural::find($id);
        return view('admin.natural.edit', compact('natural'));
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
            'cedula' => 'required',
            'Pnombre' => 'required',
            'Snombre' => 'required',
            'Papellido' => 'required',
            'Sapellido' => 'required',
        ]);

        $natural = Juridico::find($id);

        $natural->uptade([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'rif' => $request->input('rif'),
            'cedula' => $request->input('cedula'),
            'Pnombre' => $request->input('Pnombre'),
            'Snombre' => $request->input('Snombre'),
            'Papellido' => $request->input('Papellido'),
            'Sapellido' => $request->input('Sapellido'),
        ]);

        return redirect()->route('natural')->with('success', 'Cliente Natural Actualizado');
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
            Natural::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('natural')->with('warning', 'No se puede eliminar dicho Cliente Natural ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('natural')->with('success', 'Cliente Natural Eliminado');
    }
}
