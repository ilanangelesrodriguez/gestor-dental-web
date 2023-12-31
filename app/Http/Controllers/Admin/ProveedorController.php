<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{

    public function __construct(){

        $this->middleware('can:admin.proveedores.index')->only('index');
        $this->middleware('can:admin.proveedores.create')->only('create','store');
        $this->middleware('can:admin.proveedores.edit')->only('edit','update');
        $this->middleware('can:admin.proveedores.destroy')->only('destroy');
    }

    public function index()
    {
        // recuperando todos los proveedores
        $proveedores = Proveedor::all();
        $contador=1;

        // mostrando la vista principal de los proveedores
        return view('admin.proveedores.index', compact('proveedores','contador'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // mostrando la vista para crear a los proveedores
        return view('admin.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // regla de validacion al enviar el formulario
        $request->validate([
            'name' => 'required',
            'contacto' => 'required|unique:proveedors,contacto',
            'phone' => 'required',
        ]);

        // creando proveedor con asignacion masiva
        $proveedore = Proveedor::create($request->all());

        // redirigiendo al usuario
        return redirect()->route('admin.proveedores.edit', $proveedore)->with('info','El proveedor se creó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedore)
    {
        // mostrando la vista detalle del proveedor
        // le pasamos el proveedor a la vista
        return view('admin.proveedores.show', compact('proveedore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedore)
    {
        // mostrando la vista editar proveedor
        // le pasamos el proveedor a la vista
        return view('admin.proveedores.edit', compact('proveedore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedore)
    {
        // regla de validacion al enviar el formulario
        $request->validate([
            'name' => 'required',
            'contacto' => 'required|unique:proveedors,contacto',
            'phone' => 'required',
        ]);

        $proveedore->update($request->all());

        // redireccionando al usuario con un mensaje de sesion
        return redirect()->route('admin.proveedores.edit', $proveedore)->with('info','El proveedor se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedore)
    {
        // eliminando categoria y redirigiendo al index de categorias
        $proveedore->delete();

        return redirect()->route('admin.proveedores.index')->with('info','El proveedor se eliminó con éxito');
    }
}
