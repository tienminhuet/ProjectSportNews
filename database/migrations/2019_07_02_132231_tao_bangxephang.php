<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoBangxephang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BangXepHang', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->integer('XepHang');
            $table->string('TenDoiBong', 100);
            $table->integer('SoTran');
            $table->integer('Thang');
            $table->integer('Hoa');
            $table->integer('Thua');
            $table->integer('HieuSo');
            $table->integer('Diem');
            $table->unsignedInteger('IDLoaiTin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BangXepHang');
    }
}
