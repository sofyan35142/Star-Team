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
        Schema::create('jualproduk', function (Blueprint $table) {
            $table->id("id_produk");




            // $table->id("id_kategori);

            $table->string("nama_produk");
            $table->string("descproduk");
            $table->string("kategori_produk");
            $table->string("variasi");
            $table->string("stock");
            $table->string("harga");
            $table->string("berat_produk");
            $table->string("ulp");
            $table->string("upp");
            $table->string("utp");
            $table->string("ekspedisi");
            $table->string("foto_produk")->nullable();
            $table->string("foto_produk2")->nullable();
            $table->string("foto_produk3")->nullable();
            $table->string("foto_produk4")->nullable();
            $table->string("foto_produk5")->nullable();
            $table->string("foto_produk6")->nullable();
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
        Schema::dropIfExists('jualproduk');
    }
};
