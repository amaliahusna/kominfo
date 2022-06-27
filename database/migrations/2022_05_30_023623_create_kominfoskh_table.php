<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKominfoskhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kominfoskh', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Keperluan');
            $table->string('Alamat');
            $table->string('Ruang');
            $table->string('Status')->default('Check In');
            $table->string('Status2')->default('Check Out');
            $table->string('Foto')->nullable();
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
        Schema::dropIfExists('kominfoskh');
    }
}
