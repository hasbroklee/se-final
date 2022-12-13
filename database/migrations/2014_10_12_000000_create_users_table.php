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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_name')->unique();
            $table->string('password');
            $table->tinyInteger('role_as')->default(0)->comment('0: User, 1: Admin');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->default('1');
            $table->string('title_post');
            $table->string('img_post');
            $table->string('content_post');
            $table->integer('number_access')->nullable();;
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_post');
            $table->string('content_comment');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_post')->references('id')->on('posts');
        });

        DB::table('users')->insert(
            array(
                'user_name' => '001',
                'name' => 'Admin',
                'password' => '$2y$10$JNcT21NQl7BapkZxLN7PyuwZLDzrWVfmjcU73aFtjfXbMzL5NIfBa', // password = admin123
                'role_as' => '1',
            )
        );
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
};
