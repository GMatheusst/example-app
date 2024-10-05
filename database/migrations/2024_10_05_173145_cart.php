<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('cart', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users');
        $table->decimal('total_price', 10, 2);
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};