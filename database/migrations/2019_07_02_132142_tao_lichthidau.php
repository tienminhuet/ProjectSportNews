<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoLichthidau extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LichThiDau', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->dateTime('NgayGio');
            $table->integer('VongDau');
            $table->string('ChuNha', 100);
            $table->string('TiSo', 10);
            $table->string('Doikhach', 100);
            $table->unsignedInteger("IDLoaiTin");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LichThiDau');
    }
}
