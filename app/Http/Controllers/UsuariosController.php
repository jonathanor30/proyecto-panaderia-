<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=Usuarios :: paginate(5);
        return view('Usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Usuarios.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosUsuarios=request()->all();
        $datosUsuarios=request()->except('_token');
        Usuarios::insert ($datosUsuarios);
        //return response()->json($datosUsuarios);
        return redirect('Usuarios')->with('Mensaje','Usuario agregado con exito');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=Usuarios::findOrFail($id);
        return view('Usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios=request()->except(['_token','_method']);
        Usuarios:: where ('id','=',$id)->update($datosUsuarios);

        //BUSCA EL ID DEL PARAMETRO Y LO MUESTRA MODIFICADO

        // $usuario=Usuarios::findOrFail($id);
       // return view('Usuarios.edit',compact('usuario'));
        return redirect('Usuarios')->with('Mensaje','Usuario modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuarios :: destroy ($id);
        //return redirect('Usuarios');
        return redirect('Usuarios')->with('Mensaje','Usuario eliminado ');
    }
}
