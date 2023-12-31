<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Proveedor;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.products.index')->only('index');
        $this->middleware('can:admin.products.create')->only('create', 'store');
        $this->middleware('can:admin.products.edit')->only('edit', 'update');
        $this->middleware('can:admin.products.destroy')->only('destroy');
    }

    public function index()
    {
        $products = Product::all();
        $contador=1;
        return view('admin.products.index', compact('products','contador'));
    }


    public function create()
    {
        $product = new Product();
        $categories = Category::pluck('name', 'id');
        $proveedores = Proveedor::pluck('name', 'id');
        $product->category_id = $categories;
        $product->proveedor_id = $proveedores;

        return view('admin.products.create', compact('product', 'categories', 'proveedores'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|image|mimes:jpeg,png,svg|max:1024',
            'category_id' => 'required',
            'proveedor_id' => 'required'
        ]);

        $product = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'imagen/product/';
            $imagenProducto = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imagenProducto);
            $product['image'] = "$imagenProducto";
        }

        $product['category_id'] = $request->category_id;
        $product['proveedor_id'] = $request->proveedor_id;
        Product::create($product);
        return redirect()->route('admin.products.index')->with('info', 'El producto se creó con éxito');
    }


    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        $proveedores = Proveedor::pluck('name', 'id');
        return view('admin.products.edit', compact('product', 'categories', 'proveedores'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required' . ($request->slug != $product->slug ? '|unique:products,slug' : ''),
            'category_id' => 'required',
            'proveedor_id' => 'required',
        ]);
    
        $formProduct = $request->except(['new_image']);
    
        if ($request->hasFile('new_image')) {
            $imagen = $request->file('new_image');
            $rutaGuardarImg = 'imagen/product/';
            $nuevaImagen = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $nuevaImagen);
            $formProduct['image'] = $nuevaImagen;
    
            // Eliminar la imagen anterior si existe
            if ($product->image) {
                $rutaImagenAnterior = $rutaGuardarImg . $product->image;
                if (file_exists($rutaImagenAnterior)) {
                    unlink($rutaImagenAnterior);
                }
            }
        }
    
        $product->update($formProduct);

        return redirect()->route('admin.products.index')->with('info', 'El producto se actualizó exitosamente');
    }


    public function destroy(Product $product)
    {
        // Eliminar la imagen asociada al producto
        if (!empty($product->image)) {
            $rutaImagen = 'imagen/product/' . $product->image;
            if (file_exists($rutaImagen)) {
                unlink($rutaImagen);
            }
        }

        // eliminando categoria y redirigiendo al index de categorias
        $product->delete();

        return redirect()->route('admin.products.index')->with('info', 'El producto se eliminó con éxito');
    }
}
