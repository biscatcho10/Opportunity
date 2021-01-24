<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            // $table->string('first_name');
            // $table->string('last_name');
            $table->string('prefix')->nullable();
            $table->string('suffix')->nullable();
            $table->string('asociation')->nullable();
            $table->string('title')->nullable();
            $table->string('comp_website')->nullable();
            $table->string('str_add_one')->nullable();
            $table->string('str_add_two')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('comp_type')->nullable();
            $table->boolean('tax_add')->nullable();
            $table->boolean('send_mail')->nullable();
            $table->string('zip')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
