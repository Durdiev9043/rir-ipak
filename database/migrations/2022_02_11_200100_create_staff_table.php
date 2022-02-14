<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->unsignedBigInteger('village_id');
            $table->unsignedBigInteger('region_id');
            $table->string('passport')->nullable()->unique();
            $table->BigInteger('inn')->nullable()->unique();
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
