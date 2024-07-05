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
        Schema::create('condominiums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('location');
            $table->integer('employees');
            $table->decimal('incomes', 10, 2);
            $table->decimal('expenses', 10, 2);
            $table->decimal('utility', 10, 2);
            $table->boolean('is_active')->nullable()->default(true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
        
        Schema::create('districts', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->enum('name', ['Chorrillos', 'Barranco', 'San Borja', 'Santiago de Surco', 'Surquillo', 'La Molina', 'Miraflores', 'San Isidro', 'Lince'])
                ->nullable()
                ->default('Chorrillos');
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->enum('name', ['Vigilante Diurno', 'Vigilante Nocturno', 'Personal de Limpieza', 'Supervisor', 'Administrador', 'Gerente'])
                ->nullable()
                ->default('Vigilante Diurno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condominiums');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('roles');
    }
};
