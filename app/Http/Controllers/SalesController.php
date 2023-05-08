<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;


class SalesController extends Controller
{
    public function index()
    {
        return Sale::all();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->nombre_vendedor = $request->nombre_vendedor;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->nombre_producto = $request->nombre_producto;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        return $sale;
    }

    public function show($id)
    {
        $sale = Sale::findOrFail($id);
        return response()->json($sale);
    }


    public function edit()
    {
    }

    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);
        $sale->nombre_vendedor = $request->nombre_vendedor;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->nombre_producto = $request->nombre_producto;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        return $sale;
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return $sale;
    }
}
