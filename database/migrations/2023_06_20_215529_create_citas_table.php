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
            Schema::create('citas', function (Blueprint $table) {
                $table->id();
                $table->date('fecha');
                $table->time('hora');
                $table->text('descripcion');
                $table->timestamps();
    

            });
        }
    
        public function down()
        {
            Schema::dropIfExists('citas');
        }
    };
