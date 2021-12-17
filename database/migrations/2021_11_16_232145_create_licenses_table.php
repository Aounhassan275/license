<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('father_name')->nullable();
            $table->string('city')->nullable();
            $table->string('license_number')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('valid_from')->nullable();
            $table->string('valid_to')->nullable();
            $table->string('allowed_vehicles')->nullable();
            $table->string('status')->nullable();
            $table->string('pin')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('height')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('passport')->nullable();
            $table->string('dob')->nullable();
            $table->string('mobile')->nullable();
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
        Schema::dropIfExists('licenses');
    }
}
