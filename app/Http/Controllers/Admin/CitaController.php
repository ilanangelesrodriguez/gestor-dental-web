<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function __construct()
    {

        $this->middleware('can:admin.citas.index')->only('index');
        $this->middleware('can:admin.citas.create')->only('create', 'store');
        $this->middleware('can:admin.citas.edit')->only('edit', 'update');
        $this->middleware('can:admin.citas.destroy')->only('destroy');
    }
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $citas = Cita::where('fecha', 'LIKE', '%' . $texto . '%')
        ->orWhere('hora', 'LIKE', '%' . $texto . '%')
        ->orderBy('fecha', 'asc')
        ->paginate(10);
        $contador = 1;
        return view('admin.citas.index', compact('texto','citas', 'contador'));
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

        return redirect()->route('admin.citas.index')->with('info', 'Cita creada exitosamente.');
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

        return redirect()->route('admin.citas.index')->with('info', 'Cita actualizada exitosamente.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect()->route('admin.citas.index')->with('info', 'Cita eliminada exitosamente.');
    }
}
