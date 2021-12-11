<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_teams', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("position_id")->references("id")->on("positions")->cascadeOnDelete();
            $table->foreignId("team_id")->references("id")->on("teams")->cascadeOnDelete();
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
        Schema::dropIfExists('position_teams');
    }
}
