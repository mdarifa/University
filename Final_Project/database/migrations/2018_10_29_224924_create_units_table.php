<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit_name');
            $table->integer('university_id')->comment('Foreign key of university model');
            $table->string('required_ssc_gpa')->default('0');
            $table->string('required_hsc_gpa')->default('0');
            $table->string('required_total_gpa')->default('0');
            $table->string('application_deadline')->nullable();
            $table->string('exam_date')->nullable();
            $table->integer('group_id');
            $table->integer('apply_fee');
            $table->integer('seat');
            $table->longText('apply_process');
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
        Schema::dropIfExists('units');
    }
}
