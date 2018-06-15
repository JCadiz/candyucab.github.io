<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Prueba;

class PruebaController extends Controller
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
        $tiendas = Prueba::paginate(6);
        return view('admin.prueba.index', compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tienda = new Prueba();
        return view('admin.prueba.create', compact('tienda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = "sinimagen.jpg";
        if ($request->file('fileimage')) {
            $img = $request->file('fileimage');
            $file_name = $img->getClientOriginalName();
            Storage::disk('img')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }

         $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'precio' => 'required'
        ]);

        Prueba::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $file_name,
            'precio' => $request->input('precio')
        ]);

        //return redirect('/users');
        return redirect()->route('prueba2')->with('success', 'Producto Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tienda = Prueba::find($id);
        return view('admin.prueba.show', compact('tienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tienda = Prueba::find($id);
        return view('admin.prueba.edit', compact('tienda'));
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
        $file_name = "sinimagen.jpg";
        if ($request->file('fileimage')) {
            $img = $request->file('fileimage');
            $file_name = $img->getClientOriginalName();
            Storage::disk('img')->put(
                $file_name,
                file_get_contents($img->getRealPath())
            );
        }

        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'precio' => 'required'
        ]);

        $tienda = Prueba::find($id);

        $tienda->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'precio' => $request->input('precio')
        ]);

        return redirect()->route('prueba2')->with('success', 'Producto Actualizado');
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
            Prueba::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('prueba2')->with('warning', 'No se puede eliminar dicho producto ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('prueba2')->with('success', 'Producto Eliminado');

    }
}
