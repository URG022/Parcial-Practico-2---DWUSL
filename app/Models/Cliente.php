<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'Clientes';
    protected $primaryKey = 'Id_Cliente';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Apellido',
        'Fecha_Nac'
    ];
}
