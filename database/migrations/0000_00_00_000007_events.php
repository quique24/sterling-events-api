<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('salon')->nullable();
            $table->string('grupo')->nullable();
            $table->string('cliente')->nullable();
            $table->string('gte_de_gpos')->nullable();
            $table->string('pax')->nullable();
            $table->string('montaje')->nullable();
            $table->string('notas')->nullable();
            $table->decimal('equipment')->nullable();
            $table->decimal('operation')->nullable();
            $table->decimal('entertainment')->nullable();
            $table->decimal('subtotal')->nullable();
            $table->decimal('final')->nullable();
            $table->decimal('iva')->nullable();
            $table->date('start');
            $table->json('color')->nullable();
            $table->boolean('draggable')->default(true)->nullable();
            $table->json('resizable')->nullable();
            $table->json('products')->nullable();
            $table->decimal('total');
            $table->string('provider_name')->nullable();
            $table->string('material_name')->nullable();
            $table->json('material_qty')->nullable();
            $table->decimal('costo_unitario')->nullable();
            $table->decimal('flete')->nullable();
            $table->decimal('mano_de_obra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
