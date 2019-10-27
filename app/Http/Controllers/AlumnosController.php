<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\Datatables;
use App\Alumno;
class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $alumnos=Alumno::paginate(10);
        $alumnos=Alumno::all();
        return view('alumnos.index', ['muchosalumnos' => $alumnos]);

        //
    }

    public function alumnosData()
    {
        return Datatables::of(Alumno::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alumnos.create');
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
        $alumn=new Alumno;
        $alumn->nombre=$request->nombre;
        $alumn->apellidos=$request->apellidos;
        $alumn->ci=$request->ci;
        $alumn->cu=$request->cu;
        $alumn->email=$request->email;
        $alumn->direccion=$request->direccion;
        $alumn->celular=$request->celular;
        $alumn->telefono=$request->telefono;
        $alumn->estado=1;
        $alumn->save();
        return Redirect::to('alumnos');
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
        
        $alumno=Alumno::findOrFail($id);
        return view('alumnos.show',['alumno'=>$alumno]);
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
        $alumno=Alumno::findOrFail($id);
        return view('alumnos.edit',['alumno'=>$alumno]);
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
        $alumn=Alumno::findOrFail($id);
        $alumn->nombre=$request->nombre;
        $alumn->apellidos=$request->apellidos;
        $alumn->ci=$request->ci;
        $alumn->cu=$request->cu;
        $alumn->email=$request->email;
        $alumn->direccion=$request->direccion;
        $alumn->celular=$request->celular;
        $alumn->telefono=$request->telefono;
        $alumn->estado=1;
        $alumn->update();
        return Redirect::to('alumnos');

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
        //dd($id);
        $alumn=Alumno::findOrFail($id);
        $alumn->estado=0;
        $alumn->update();
        return Redirect::to('alumnos');

    }
}
