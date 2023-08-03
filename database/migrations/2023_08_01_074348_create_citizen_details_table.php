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
        Schema::create('citizen_details', function (Blueprint $table) {
            $table->uuid("nin");
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("surname");
            $table->string("full_name");
            $table->string("date_of_birth");
            $table->string("height");
            $table->string("email_address");
            $table->string("phone_number");
            $table->string("address");
            $table->string("state_of_origin");
            $table->enum("gender", ["male", "female"]);
            $table->string("int_passport_no")->nullable();
            $table->string("int_passport_no_exp")->nullable();
            $table->string("driver_license_id")->nullable();
            $table->string("driver_license_id_exp")->nullable();
            $table->string("pvc_id")->nullable();
            $table->string("pvc_id_exp")->nullable();
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
        Schema::dropIfExists('citizen_details');
    }
};
