<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\CandyPoint;

class CandyPointController extends Controller
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
        $candys = CandyPoint::paginate(6);
        return view('admin.candyP.index', compact('candys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candy = new CandyPoint();
        return view('admin.candyP.create', compact('candy'));
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
            'cantidad' => 'required',
            'valorActual' => 'required',
            'imagen' => 'required',
            'precio' => 'required'
        ]);

        CandyPoint::create([
            'cantidad' => $request->input('cantidad'),
            'valorActual' => $request->input('valorActual'),
            'fk_natural' => $request->input('fk_natural'),
            'fk_juridico' => $request->input('fk_juridico')
        ]);

        //return redirect('/users');
        return redirect()->route('candy2')->with('success', 'CandyPoints Creados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candy = CandyPoint::find($id);
        return view('admin.candyP.show', compact('candy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candy = CandyPoint::find($id);
        return view('admin.candyP.edit', compact('candy'));
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
            'cantidad' => 'required',
            'valorActual' => 'required',
            'imagen' => 'required',
            'precio' => 'required'
        ]);

        $candy = CandyPoint::find($id);

        $candy->update([
            'cantidad' => $request->input('cantidad'),
            'valorActual' => $request->input('valorActual'),
            'fk_natural' => $request->input('fk_natural'),
            'fk_juridico' => $request->input('fk_juridico')
        ]);

        return redirect()->route('candy2')->with('success', 'CandyPoints Actualizados');
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
            CandyPoint::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('candy2')->with('warning', 'No se puede eliminar dichos CandyPoint ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('candy2')->with('success', 'CandyPoint Eliminado');
    }
}
