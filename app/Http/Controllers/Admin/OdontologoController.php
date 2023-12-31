<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Odontologo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OdontologoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $odontologos = Odontologo::all();
        return view('admin.odontologo.index', compact('odontologos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.odontologo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $odontologo = new Odontologo;
            $odontologo->nombre = $request->name;
            $odontologo->especialidad = $request->especialidad;
            $odontologo->activo = $request->activo;
            $odontologo->dni = $request->dni;
            $odontologo->save();
            return redirect()->route('admin.odontologo.index');
        } catch (\Throwable $th) {
            dd($th);

            return redirect()->route('admin.odontologo.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $odontologo = Odontologo::findOrFail($id);
        return view('admin.odontologo.edit', compact('odontologo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $odontologo = Odontologo::findOrFail($id);
            $odontologo->nombre = $request->name;
            $odontologo->especialidad = $request->especialidad;
            $odontologo->activo = $request->activo;
            $odontologo->dni = $request->dni;
            $odontologo->update();
            return redirect()->route('admin.odontologo.index');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('admin.odontologo.update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Odontologo::destroy($id);
        return redirect()->route('admin.odontologo.index');
    }
}
