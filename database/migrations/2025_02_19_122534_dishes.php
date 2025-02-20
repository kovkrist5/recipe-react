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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoryId')->references('id')->on('categories');
            $table->string('name');
            $table->string('desc');
            $table->string('img')->nullable(); //nullable until testing done;
            $table->string('inst'); //seperate with ;
            $table->integer('prep'); //minutes
            $table->integer('cooktime')->nullable(); //minutes
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
