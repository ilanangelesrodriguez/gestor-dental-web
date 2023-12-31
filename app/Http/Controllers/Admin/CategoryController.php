<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct(){

        $this->middleware('can:admin.categories.index')->only('index');
        $this->middleware('can:admin.categories.create')->only('create','store');
        $this->middleware('can:admin.categories.edit')->only('edit','update');
        $this->middleware('can:admin.categories.destroy')->only('destroy');
    }

    public function index()
    {
        $categories=Category::all();
        $contador=1;
        return view('admin.categories.index', compact('categories','contador'));
    }

    
    public function create()
    {
        return view('admin.categories.create');
    }

    
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:categories'
        ]);

        $category = Category::create($request->all());

        return redirect()->route('admin.categories.edit', $category)->with('info','La categoria se creó con éxito');
    }

    
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    
    public function update(Request $request,  Category $category)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:categories,slug,$category->id"
        ]);

        $category->update($request->all());

        // redireccionando al usuario con un mensaje de sesion
        return redirect()->route('admin.categories.edit', $category)->with('info','La categoria se actualizó con éxito');
    }

    
    public function destroy(Category $category)
    {
        // eliminando categoria y redirigiendo al index de categorias
        $category->delete();

        return redirect()->route('admin.categories.index')->with('info','La categoria se eliminó con éxito');
    }
}
