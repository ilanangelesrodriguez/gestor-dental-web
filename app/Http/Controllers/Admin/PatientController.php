<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Cita;


class PatientController extends Controller
{
    public function __construct(){

        $this->middleware('can:admin.patients.index')->only('index');
        $this->middleware('can:admin.patients.create')->only('create', 'store');
        $this->middleware('can:admin.treatments.edit')->only('edit','update');

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return view('admin.patients.index', compact('patients'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.patients.create');
    }
    

    
    public function store(PatientRequest $request)
    {
        $patient = Patient::create($request->all());
        return redirect()->route('admin.patients.edit', $patient)->with('info', 'El paciente se creó con éxito');
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
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return redirect()->route('admin.patients.edit', $patient)->with('info', 'El paciente se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('admin.patients.index')->with('info','El paciente se eliminó con éxito');
    }
    //
    public function reportePDF(){
        $pacientes=Patient::all();
        $pdf = Pdf::loadView('paciente.paciente', compact('pacientes'));
        return $pdf->stream();
    }
    public function buscarCita(Request $request)
    {
        $buscarCita = $request->input('search');
        
        $cita = Cita::where('estado_cita', 'LIKE', "%$buscarCita%")
                    ->orWhere('fecha', 'LIKE', "%$buscarCita%")
                    ->get();

        return view('search.index', compact('cita'));
    }

    public function agendarCita(Request $request){

    }
}
