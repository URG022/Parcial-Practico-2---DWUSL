<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('detalle_pedidos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('Id_Articulo');
        $table->unsignedBigInteger('Id_Pedido');
        $table->integer('Cantidad');
        $table->float('Descuento')->default(0);
        $table->timestamps();

        $table->foreign('Id_Articulo')->references('Id_Articulo')->on('articulos')->onDelete('cascade');
        $table->foreign('Id_Pedido')->references('Id_Pedido')->on('pedidos')->onDelete('cascade');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};
