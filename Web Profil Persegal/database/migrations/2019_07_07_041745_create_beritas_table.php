<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->increments('id');
            $table->text("judul");
            $table->text("isi_konten");
            $table->text("foto")->nullable();
            $table->integer('id_kategori')->unsigned();
            $table->text("slug")->nullable();
            $table->enum('status',['1','0']);
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('categories')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}
