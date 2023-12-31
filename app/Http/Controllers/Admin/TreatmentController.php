<?php

namespace App\Http\Controllers\Admin;

use App\Models\Treatment;
use App\Http\Controllers\Controller;
use App\Http\Requests\TreatmentRequest;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{

    public function __construct(){

        $this->middleware('can:admin.treatments.index')->only('index');
        $this->middleware('can:admin.treatments.create')->only('create','store');
        $this->middleware('can:admin.treatments.edit')->only('edit','update');
        $this->middleware('can:admin.treatments.destroy')->only('destroy');
    }
    
    public function index()
    {
        $treatments = Treatment::all();
        return view('admin.treatments.index', compact('treatments'));
    }

    
    public function create()
    {
        return view('admin.treatments.create');
    }

    
    public function store(TreatmentRequest $request)
    {
        $treatment = Treatment::create($request->all());
        return redirect()->route('admin.treatments.edit', $treatment)->with('info', 'El tratamiento se creó con éxito');
    }

    
    public function show(Treatment $treatment)
    {
        return view('admin.treatments.show', compact('treatment'));
    }

    
    public function edit(Treatment $treatment)
    {
        return view('admin.treatments.edit', compact('treatment'));
    }

    
    public function update(TreatmentRequest $request, Treatment $treatment)
    {
        $treatment->update($request->all());
        return redirect()->route('admin.treatments.edit', $treatment)->with('info', 'El tratamiento se actualizó con éxito');
    }

    
    public function destroy(Treatment $treatment)
    {
        $treatment->delete();
        return redirect()->route('admin.treatments.index')->with('info', 'El tratamiento se eliminó con éxito');
    }
}
