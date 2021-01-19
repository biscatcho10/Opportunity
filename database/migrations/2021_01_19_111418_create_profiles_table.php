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
            $table->string('suffix');
            $table->string('asociation');
            $table->string('title');
            $table->string('comp_website');
            $table->string('str_add_one');
            $table->string('str_add_two');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('comp_type');
            $table->boolean('tax_add');
            $table->boolean('send_mail');
            $table->string('zip');
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
