<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Validation\Rules\Unique;

class CreateProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('npm')->unique();
            $table->string('nama', 30);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 10);
            $table->string('agama', 20);
            $table->longText('alamat');
            $table->string('ponsel', 15);
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
        Schema::dropIfExists('profile');
    }
}
