<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripciones = Inscripcion::all();
        return view('inscripciones.index', compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'curso_id' => 'required',
            'instructor_id' => 'required',
            'estudiante_id' => 'required',
            'fecha_inscripcion' => 'required'

        ]);

        Inscripcion::create($validateData);

        return redirect()->route('inscripciones.index')->with('success', 'Inscripcion realizada con exito');
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
        $inscripcion = Inscripcion::findOrFail($id);
        return view('cursos.edit', compact('estudiante'));
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
        $validatedData = $request->validate([
            'curso_id' => 'required',
            'instructor_id' => 'required',
            'estudiante_id' => 'required',
            'fecha_inscripcion' => 'required'

        ]);

        Inscripcion::whereId($id)->update($validateData);

        return redirect()->route('inscripciones.index')->with('success', 'Inscripcion actulizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inscripcion::destroy($id);
        return redirect()->route('inscripciones.index')->with('succes', 'Inscripcion elimnada con exito');
    }
}
