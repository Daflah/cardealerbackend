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
        Schema::create('jualans', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('merk');
            $table->string('namamobil');
            $table->string('type');
            $table->string('transmission');
            $table->string('bensin');
            $table->decimal('harga', 15, 2); // Menambahkan kolom harga
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jualans');
    }
};
