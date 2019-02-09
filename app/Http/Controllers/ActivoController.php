<?php

namespace vzla1\Http\Controllers;

use vzla1\Http\Controllers\Controller;
use vzla1\Activo;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Sorage;
use vzla1\Http\Requests\StoreActivoRequest;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $request->user()->authorizeRoles('admin');
       $activos = Activo::all(); 
       return view ('Activo.index', compact('activos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view ('Activo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivoRequest $request)
    {
        $activo =new Activo();

          if($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
         } 

          $activo = new Activo();
          $activo->cod = $request->input('cod');
          $activo->descrip = $request->input('descrip');
          $activo->fecha_ini = $request->input('fecha_ini');
          $activo->fecha_fin = $request->input('fecha_fin');
          $activo->valor = $request->input('valor');
          $activo->foto = $request->file('foto');
          $activo->save();
          return redirect ()->route('activo.create')-> with('status','datos creados');
       
          //return $request->all(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activo = Activo::find($id);
        // return $activo;
       //$activos = Activo::all(); 
      
       return view ('Activo.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $activo = Activo::find($id);
        // return $activo;
       return view ('Activo.edit', compact('activo'));
    }

    /**$id
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Activo $activo )
    
    public function update(StoreActivoRequest $request, Activo $activo ){
      
      if($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            } 

        $activo->fill($request->except('foto')); 
        $activo->save();
         return redirect ()->route('activo.show', [$activo])-> with('status','datos actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(activo $activo)
    {
        $activo->delete();
       return redirect ()->route('activo.index')-> with('status','datos eliminados');
    }
}
