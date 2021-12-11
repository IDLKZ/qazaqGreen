<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines', function (Blueprint $table) {
            $table->id();
            $table->string("slug");
            $table->string("title_ru",500);
            $table->string("title_kz",500)->nullable();
            $table->string("title_en",500)->nullable();
            $table->text("description_ru");
            $table->text("description_kz")->nullable();
            $table->text("description_en")->nullable();
            $table->string("image");
            $table->string("file");
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
        Schema::dropIfExists('magazines');
    }
}
