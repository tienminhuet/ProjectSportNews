<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoTintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TinTuc', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->string('TieuDe', 100);
            $table->string('HinhAnh', 100);
            $table->string('ChuThichHinhAnh', 100);
            $table->text('NoiDung');
            $table->text('TomTat');
            $table->string('KeyWord', 255);
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
        Schema::dropIfExists('TinTuc');
    }
}
