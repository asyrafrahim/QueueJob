<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration{

    // this method will create a database called jobs with its respective columns
    public function up(){
        Schema::create('jobs', function (Blueprint $table) { //we define our database columns here
            $table->bigIncrements('id');
            $table->string('queue')->index();
            $table->longText('payload');
            $table->unsignedTinyInteger('attempts');
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });
    }

    // this method is used to check if the table already exists
    public function down(){
        Schema::dropIfExists('jobs');
    }
}