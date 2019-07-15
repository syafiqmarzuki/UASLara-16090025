<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSquadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('squads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string("posisi");
            $table->integer("nomor_punggung");
            $table->integer("id_kategori")->unsigned();
            $table->string("foto")->nullable();
            $table->date("tgl_lahir");
            $table->enum('status',['1','0']);
            $table->string("slug");
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
        Schema::dropIfExists('squads');
    }
}
