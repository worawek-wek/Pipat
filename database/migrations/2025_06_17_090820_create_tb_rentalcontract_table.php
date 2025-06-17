<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rentalcontract', function (Blueprint $table) {
            $table->id();
            $table->longText('detail')->comment("")->nullable();
          
            $table->smallInteger("status")->comment("0 =ปิดใช้งาน, 1=เปิดใช้งาน")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_rentalcontract');
    }
};
