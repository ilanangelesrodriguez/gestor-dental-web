<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Proveedor;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class PurchaseController extends Controller
{

    public function __construct()
    {

        $this->middleware('can:admin.purchase.index')->only('index');
        $this->middleware('can:admin.purchase.create')->only('create', 'store');
    }

    public function index()
    {
        $purchases = Purchase::all();
        $contador=1;
        return view('admin.purchase.index', compact('purchases','contador'));
    }


    public function create()
    {
        $proveedores = Proveedor::all();
        $products = Product::all();
        return view('admin.purchase.create', compact('products', 'proveedores'));
    }


    public function store(Request $request)
    {

        // Validar los datos enviados en la solicitud
        $request->validate([
            'tax' => 'required|numeric',
        ]);

        // Obtener los detalles de compra enviados desde el formulario
        $purchaseDetails = $request->input('purchaseDetails');
        // Calcular el subtotal
        $subtotal = 0;

        foreach ($purchaseDetails as $detalle) {
            $cantidad = $detalle['quantity'];
            $precio = $detalle['price'];

            $subtotal += $cantidad * $precio;
        }

        // Calcular el total incluyendo el impuesto
        $impuesto = $request->input('tax');
        $total = $subtotal + ($subtotal * $impuesto / 100);

        $purchase = Purchase::create($request->all() + [
            'user_id' => Auth::user()->id,
            'purchase_date' => Carbon::now('America/Lima'),
            'total'=>$total,
        ]);

        // Guardar los detalles de compra asociados a la compra
        foreach ($request->purchaseDetails as $detalle) {
            $productoId = $detalle['product_id'];
            $cantidad = $detalle['quantity'];
            $precio = $detalle['price'];

            // Guardar el detalle de compra en la base de datos
            $purchase->purchaseDetails()->create([
                'product_id' => $productoId,
                'quantity' => $cantidad,
                'price' => $precio,
            ]);

            // Actualizar el stock del producto
            $producto = Product::findOrFail($productoId);
            $producto->stock += $cantidad;
            $producto->save();
        }

        // Recorrer los detalles de compra enviados en la solicitud y guardarlos en la base de datos
        foreach ($request->purchaseDetails as $detalle) {
            $detalleCompra = new PurchaseDetails();
            $detalleCompra->purchase_id = $purchase->id;
            $detalleCompra->product_id = $detalle['product_id'];
            $detalleCompra->quantity = $detalle['quantity'];
            $detalleCompra->price = $detalle['price'];
            $detalleCompra->save();
        }

        return redirect()->route('admin.purchase.index')->with('info', 'La compra se creó con éxito');
    }

    public function cambiarEstado($id){
        $compra = Purchase::findOrFail($id);
        $estadoActual = $compra->status;

        // Lógica para cambiar el estado de la compra
        if ($estadoActual == 'PENDIENTE') {
            $compra->status = 'APROBADA';
        } else if ($estadoActual == 'APROBADA') {
            $compra->status = 'DENEGADA';
        } else {
            $compra->status = 'PENDIENTE';
        }

        $compra->save();

        return redirect()->route('admin.purchase.index')->with('info', 'El estado se cambió con éxito');
    }



    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchase'));
    }


    public function edit(Purchase $purchase)
    {
        return view('admin.purchase.edit', compact('purchase'));
    }
}
