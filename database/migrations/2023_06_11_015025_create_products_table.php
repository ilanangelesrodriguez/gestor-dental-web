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
        Schema::create('products', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('description')->nullable(); // Este campo puede ser nulo
            $table->integer('stock')->default(0);
            $table->enum('status',[0,1])->default(1);
            $table->string('image')->nullable(); // Este campo puede ser nulo

            $table->unsignedBigInteger('category_id')->unsigned();
            $table->unsignedBigInteger('proveedor_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('proveedor_id')->references('id')->on('proveedors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
