<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function __construct(){

        $this->middleware('can:admin.citas.index')->only('index');
        $this->middleware('can:admin.citas.create')->only('create','store');
        $this->middleware('can:admin.citas.edit')->only('edit','update');
        $this->middleware('can:admin.citas.destroy')->only('destroy');
    }
    public function index()
    {
        $citas=Cita::all();
        $contador=1;
        return view('admin.citas.index', compact('citas','contador'));
    }
     
    public function create()
    {
        return view('admin.citas.create');
    }
    
  

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'descripcion' => 'required',
         
        ]);

        Cita::create($validatedData);

        return redirect()->route('citas.index')->with('success', 'Cita creada exitosamente.');
    }

    public function show(Cita $cita)
    {
        return view('admin.citas.show', compact('cita'));
    }

    public function edit(Cita $cita)
    {
        return view('admin.citas.edit', compact('cita'));
    }

    public function update(Request $request, Cita $cita)
    {
        $validatedData = $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'descripcion' => 'required',
            
        ]);

        $cita->update($validatedData);

        return redirect()->route('citas.index')->with('success', 'Cita actualizada exitosamente.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'Cita eliminada exitosamente.');
    }
}
