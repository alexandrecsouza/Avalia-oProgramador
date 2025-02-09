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
        Schema::create('vendas', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            /*
            $table->string('id');
            $table->string('id_cliente');
            $table->string('id_loja');
            $table->string('id_vendedor');
            */
            $table->string('id');
            $table->string('id_cliente');
            $table->string('id_loja');
            $table->string('id_vendedor');
            $table->string('data');
            $table->string('valor');
            $table->string('observacao');
            $table->string('pagamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
