<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoPhanhoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhanHoi', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->string('Hoten',100);
            $table->string('Email',100);
            $table->string('NoiDung',3000);
            $table->unsignedInteger('IDTT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PhanHoi');
    }
}
