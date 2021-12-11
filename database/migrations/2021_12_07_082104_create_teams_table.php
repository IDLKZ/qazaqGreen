<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("slug");
            $table->string("name");
            $table->string("position",500);
            $table->string("image");
            $table->text("about")->nullable();
            $table->string("instagram",500)->nullable();
            $table->string("facebook",500)->nullable();
            $table->string("vk",500)->nullable();
            $table->string("linkedin",500)->nullable();
            $table->string("twitter",500)->nullable();
            $table->string("email",500)->nullable();
            $table->string("website",500)->nullable();
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
        Schema::dropIfExists('teams');
    }
}
