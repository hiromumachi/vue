<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('training_type_id')->unsigned();
            $table->string('name');
            $table->timestamps();

            //複合ユニークキーの設定
            $table->unique(['training_type_id','name'],'UNIQUE');

            //外部キーの設定
            $table->foreign('training_type_id')
            ->references('id')
            ->on('training_types')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
