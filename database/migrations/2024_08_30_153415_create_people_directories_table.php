<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_directories', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->nullable();
            $table->string('name',191)->nullable();
            $table->string('slug',191)->nullable();
            $table->string('designation',50)->nullable();
            $table->string('telephone',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('image',255)->nullable();
            $table->string('linkedin_link',255)->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('people_directories');
    }
}
