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
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->string('enfermedad');
            $table->longText('cirugia');

            $table->unsignedBigInteger('patients_id');
            $table->foreign('patients_id')->references('id')->on('patients')->onDelete('cascade');

            $table->unsignedBigInteger('treatments_id');
            $table->foreign('treatments_id')->references('id')->on('treatments')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historials');
    }
};
