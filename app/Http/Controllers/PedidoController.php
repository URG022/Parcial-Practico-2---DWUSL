<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    private function base()
    {
        return Pedido::query()
            ->join('cliente', 'cliente.Id_Cliente', '=', 'pedido.Id_Cliente')
            ->select('pedido.*', DB::raw("CONCAT(cliente.Nombre, ' ', cliente.Apellido) AS ClienteNombre"));
    }

    private function clientes()
    {
        return DB::table('cliente')->orderBy('Nombre')->get();
    }

    private function reglas(): array
    {
        return [
            'FechaPedido'   => 'required|date',
            'FechaEntrega'  => 'required|date|after_or_equal:FechaPedido',
            'Observaciones' => 'nullable|string|max:150',
            'Id_Cliente'    => 'required|integer|exists:cliente,Id_Cliente',
        ];
    }

    public function index()
    {
        $pedidos = $this->base()->orderBy('pedido.Id_Pedido')->paginate(10);
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create', ['clientes' => $this->clientes()]);
    }

    public function store(Request $request)
    {
        Pedido::create($request->validate($this->reglas()));
        return redirect()->route('pedidos.index')->with('ok', 'Pedido creado correctamente.');
    }

    public function show($id)
    {
        $pedido = $this->base()->where('pedido.Id_Pedido', $id)->firstOrFail();
        return view('pedidos.show', compact('pedido'));
    }

    public function edit($id)
    {
        return view('pedidos.edit', [
            'pedido'   => Pedido::findOrFail($id),
            'clientes' => $this->clientes(),
        ]);
    }

    public function update(Request $request, $id)
    {
        Pedido::findOrFail($id)->update($request->validate($this->reglas()));
        return redirect()->route('pedidos.index')->with('ok', 'Pedido actualizado correctamente.');
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return redirect()->route('pedidos.index')->with('ok', 'Pedido eliminado correctamente.');
    }
}