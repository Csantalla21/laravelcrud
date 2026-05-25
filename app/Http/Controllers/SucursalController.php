<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index()
    {
        $sucursales = Sucursal::all();

        return view('sucursales.index', compact('sucursales'));
    }
    public function create()
{
    return view('sucursales.create');
}
public function store(Request $request)
{
    Sucursal::create($request->all());

    return redirect('/sucursales');
}
public function destroy($id)
{
    $sucursal = Sucursal::find($id);

    $sucursal->delete();

    return redirect('/sucursales');
}
public function edit($id)
{
    $sucursal = Sucursal::find($id);

    return view('sucursales.edit', compact('sucursal'));
}
public function update(Request $request, $id)
{
    $sucursal = Sucursal::find($id);

    $sucursal->update($request->all());

    return redirect('/sucursales');
}
}