<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('village_id');
            $table->unsignedBigInteger('region_id');
            $table->BigInteger('toladi')->nullable()->unique();
            $table->float('algan_qutisi')->nullable();
            $table->float('olgan_gr')->nullable();
            $table->float('topshirish_rejasi')->nullable();
            $table->float('topshirgani')->nullable();
            $table->timestamps();

            $table->foreign('village_id')->references('id')->on('villages');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
