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
        Schema::create('person', function(Blueprint $table){
            $table->id()->primary();
            $table->string('email', 255)->unique();
            $table->string('name', 255);
            $table->string('bty',20);
            $table->string('cpf', 20)->unique();
            $table->string('rg', 20)->unique();
            $table->string('address', 255);
            $table->string('cep', 20);
            $table->string('phone_number', 20);
            $table->string('dt_create_person', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
