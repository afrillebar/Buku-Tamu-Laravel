<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191)->nullable($value = false); //membuat kolom nama
            $table->string('jabatan'); //membuat kolom jabatan
            $table->text('alamat'); //membuat kolom alamat dengan tipe text
            $table->string('nohp'); //membuat kolom no hp
            $table->text('message'); //membuat kolom pesan dengan tipe text
            $table->timestamps(); //membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
