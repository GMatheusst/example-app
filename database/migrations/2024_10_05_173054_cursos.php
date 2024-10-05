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
    Schema::create('cursos', function (Blueprint $table) {
        $table->id();
        $table->string('name', 255);
        $table->string('description', 255);
        $table->decimal('price', 10, 2);
        $table->string('img', 255)->nullable();
        $table->integer('in_stock');
        $table->integer('workload');
        $table->softDeletes();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
