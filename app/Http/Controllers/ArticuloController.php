<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::paginate(10);
        return view('articulos.index', compact('articulos'));
    }

    public function create()
    {
        return view('articulos.create');
    }

    public function store(Request $request)
    {
        Articulo::create($request->all());
        return redirect()->route('articulos.index');
    }

    public function show($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view('articulos.read', compact('articulo'));
    }

    public function edit($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view('articulos.update', compact('articulo'));
    }

    public function update(Request $request, $id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->update($request->all());
        return redirect()->route('articulos.index');
    }

    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return redirect()->route('articulos.index');
    }
}
