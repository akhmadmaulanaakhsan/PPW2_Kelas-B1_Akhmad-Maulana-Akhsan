<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangkuu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->unsignedBigInteger('id_supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangkuu');
    }
};
