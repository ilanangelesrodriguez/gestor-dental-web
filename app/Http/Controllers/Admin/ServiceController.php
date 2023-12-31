<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Constructor para restringir a usuarios que no estén autenticados ni tengan permisos para
     * manipular los servicios
     */
    public function __construct()
    {
        $this->middleware('can:admin.service.index')->only('index');
        $this->middleware('can:admin.service.create')->only('create', 'store');
        $this->middleware('can:admin.service.edit')->only('edit', 'update');
        $this->middleware('can:admin.service.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        $services = Service::where('name', 'LIKE', '%' . $texto . '%')
            ->orWhere('price', 'LIKE', '%' . $texto . '%')
            ->orderBy('name', 'asc')
            ->paginate(10);
        $contador = 1;
        return view('admin.service.index', compact('texto', 'services', 'contador'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:services,name|regex:/^[a-zA-Z\s]+$/',
            'slug' => 'required|unique:services,slug',
            'description' => 'min:10',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,jpg,png,svg|max:1024',
        ]);

        $service = $request->all();

        // validando la imagen y la ruta en donde se guardará
        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'imagen/service/';
            $nuevaImagen = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $nuevaImagen);
            $service['image'] = "$nuevaImagen";
        }

        // creando servicio
        Service::create($service);
        // redirigiendo al usuario
        return redirect()->route('admin.service.index')->with('info', 'El servicio fué creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required' . ($request->slug != $service->slug ? '|unique:services,slug' : ''),
        ]);
        $formService = $request->except(['new_image']); // Obtén todos los campos excepto 'new_image'
        if ($imagen = $request->file('new_image')) {
            $rutaGuardarImg = 'imagen/service/';
            $nuevaImagen = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $nuevaImagen);
            $formService['image'] = $nuevaImagen;
        } else {
            unset($formService['new_image']);
        }
        $service->update($formService);
        return redirect()->route('admin.service.index')->with('info', 'El servicio se actualizó exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // Eliminar la imagen asociada al servicio
        if (!empty($service->image)) {
            $rutaImagen = 'imagen/service/' . $service->image;
            if (file_exists($rutaImagen)) {
                unlink($rutaImagen);
            }
        }

        // eliminando servicio y redirigiendo al index de servicios
        $service->delete();

        return redirect()->route('admin.service.index')->with('info', 'El servicio se eliminó con éxito');
    }
}
