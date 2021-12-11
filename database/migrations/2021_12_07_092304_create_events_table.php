<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("image");
            $table->string("slug");
            $table->string("title_ru");
            $table->string("title_kz")->nullable();
            $table->string("title_en")->nullable();
            $table->string("subtitle_ru");
            $table->string("subtitle_kz")->nullable();
            $table->string("subtitle_en")->nullable();
            $table->text("description_ru");
            $table->text("description_kz")->nullable();
            $table->text("description_en")->nullable();
            $table->string("date_start");
            $table->string("date_end");
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
        Schema::dropIfExists('events');
    }
}
