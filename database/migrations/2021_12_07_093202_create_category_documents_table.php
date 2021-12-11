<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_documents', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignId("category_id")->references("id")->on("categorydocument")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("document_id")->references("id")->on("documents")->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('category_documents');
    }
}
