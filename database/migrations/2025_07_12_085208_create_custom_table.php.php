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
        Schema::create('anime', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('filename');
            $table->timestamps();
        }); 
        Schema::create('paint', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('filename');
            $table->timestamps();
        }); 
        Schema::create('goods', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('filename');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime');
        Schema::dropIfExists('paint');
        Schema::dropIfExists('goods');

    }
};
