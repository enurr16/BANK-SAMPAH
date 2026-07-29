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
        Schema::create('detail_setorans', function (Blueprint $table) {
            $table->id();
            $table->decimal('berat', 10,2);
            $table->decimal('harga', 12,2);
            $table->decimal('subtotal', 12,2);
            $table->foreignId('setorans')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('jenis_sampahs')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_setorans');
    }
};
