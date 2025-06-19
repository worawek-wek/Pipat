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
        Schema::create('setting_bill', function (Blueprint $table) {
            $table->id();
            $table->smallInteger("type")->comment("ประเภทธุรกิจ 0=บุคคลธรรมดา")->default(0)->nullable();
            $table->string("company_name",100)->comment("ชื่อบริษัท / ชื่อเต็ม")->nullable();
            $table->text("address")->comment("ที่อยู่")->nullable();
            $table->string("tax_no",100)->comment("เลขประจำตัวผู้เสียภาษี")->nullable();
            $table->string("phone",100)->comment("เบอร์โทรศัพท์")->nullable();
            $table->string("email",100)->comment("อีเมล")->nullable();
            $table->smallInteger("type_doc")->comment("ตั้งค่ารูปแบบเอกสาร 0=ต้นฉบับ-สำเนาอยู่ใน 1 แผ่น, 1=ต้นฉบับ-สำเนา 1 แผ่น")->default(0)->nullable();
            $table->text("detail_footer")->comment("ตั้งค่าข้อความท้ายใบแจ้งหนี้")->nullable();
            $table->text("detail_doc")->comment("ตั้งค่ารูปแบบเอกสารใบเสร็จจองห้องพัก")->nullable();

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
        Schema::dropIfExists('setting_bill');
    }
};
