<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('password');
            $table->string('email', 255)->unique();
            $table->string('img', 255)->nullable();
            $table->integer('access_level'); // 0: Não autenticado, 1: Aluno, 2: Professor, 3: Adm, 4: Adm Master
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
