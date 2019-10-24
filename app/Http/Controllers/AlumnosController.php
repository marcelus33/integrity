<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Traits\OperacionesTrait;

class AlumnosController extends Controller
{   
    use OperacionesTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $alumnos = Alumno::take(20)->get();
        return response()->json($alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $options = $this->getCreateOptions('alumno');
        // strtolower(class_basename(Alumno::class))
        return view('alumnos.create', compact('options'));
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
            'nombre_alumno'=>'required',
            'cedula_numero'=>'required|min:3',
            'due'=>'max:255'
          ]);
          
        return $request->nombre_alumno;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $alumno = Alumno::find($id);
        $options = $this->getShowOptions('alumno', $id);
        return view('alumnos.show', compact('alumno', 'options'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $alumno = Alumno::find($id);
        $options = $this->getEditOptions('alumno', $id);
        return view('alumnos.edit', compact('alumno','options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
