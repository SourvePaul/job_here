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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('jobCategory_id');
            $table->integer('company_id');
            $table->string('position');
            $table->string('vacancy');
            $table->string('employment_status');
            $table->text('experience');
            $table->string('age');
            $table->string('job_location');
            $table->string('salary');
            $table->text('job_responsibilities');
            $table->text('educational');
            $table->text('skills');
            $table->text('compensation_and_others_benefits');
            $table->string('job_source');
            $table->string('apply_email');
            $table->string('published_date');
            $table->string('application_deadline_date');
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
        Schema::dropIfExists('jobs');
    }
};
