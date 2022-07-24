<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('training_type_id')->unsigned();
            $table->date('start_date');
            $table->bigInteger('day');
            $table->bigInteger('chapter_id')->unsigned();
            $table->timestamps();

            //複合ユニークキーの設定
            $table->unique(['training_type_id','start_date', 'day', 'chapter_id'],'UNIQUE');

            //外部キーの設定
            $table->foreign('training_type_id')
            ->references('id')
            ->on('training_types')
            ->onDelete('cascade');

            $table->foreign('chapter_id')
            ->references('id')
            ->on('chapters')
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
        Schema::dropIfExists('schedules');
    }
}
