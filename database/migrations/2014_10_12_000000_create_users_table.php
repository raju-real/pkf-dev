<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('mobile',15)->unique();
            $table->string('image',191)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('status')->default(0)->comment("1 => Active, 2 => In active");
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        \App\Models\User::insert([
            'name' => 'Mr. Admin',
            'email' => 'admin@gmail.com',
            'mobile' => '01695958587',
            'status' => 1,
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            'created_at' => \Carbon\Carbon::now()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
