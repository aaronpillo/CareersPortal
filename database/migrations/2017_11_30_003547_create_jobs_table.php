<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('job_id');                       //Unique identifier
            $table->text('dept_name');                          //Foreign Key: Department identifier
            $table->text('job_title');                          //Name of position
            $table->mediumtext('job_description');              //Job description or position
            $table->mediumtext('responsibilities');             //Responsibilities of a specific position
            $table->mediumtext('requirements');                 //General Requirements for the position
            $table->mediumtext('advantages');                   //List of advantages an applicant may have
            $table->mediumtext('general_qualifications');       //General Qualifications for a position
            $table->boolean('isHiring');                        //Qualifications for a position     
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
}
