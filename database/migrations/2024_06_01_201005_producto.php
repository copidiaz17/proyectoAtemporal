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
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('producto_id');
            $table->string('producto_nombre');
            $table->string('producto_descripcion');
            $table->string('producto_imagen');
            $table->float('producto_precio');
            $table->timestamps();  

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("producto");
    }
};
