<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'Id_Pedido';
    public $timestamps = false;

    protected $fillable = ['FechaPedido', 'FechaEntrega', 'Observaciones', 'Id_Cliente'];
    protected $casts = [
        'FechaPedido'  => 'datetime',
        'FechaEntrega' => 'datetime',
    ];
}