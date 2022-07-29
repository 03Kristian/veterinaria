<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Raza;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascota =Mascota::simplePaginate(4);
        $raza= Raza::simplePaginate(4);
        return view('mascota.index',compact('raza','mascota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $raza = Raza::all();
        return view('mascota.create',compact('raza'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->categoria = $request->categoria;
        $mascota->foto = $request->foto;
        $mascota->genero = $request->genero;
        $mascota->id_raza = $request->raza;
        $mascota->save();
        return redirect()->route('mascota.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mascota=Mascota::find($id);
        $raza =Raza::get();
        return view('mascota.edit', compact('mascota','raza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $mascota=Mascota::find($id);
        $mascota->nombre = $request->nombre;
        $mascota->categoria = $request->categoria;
        $mascota->foto = $request->foto;
        $mascota->genero = $request->genero;
        $mascota->id_raza = $request->raza;
        $mascota->save();
        return redirect()->route('mascota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota=Mascota::find($id);
        $mascota->delete();
        return redirect()->route('mascota.index');
    }
}
