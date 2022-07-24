<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->integer('employee_num')->unsigned();
            $table->string('email')->unique();
	        $table->bigInteger('training_type_id')->unsigned();
            $table->date('hire_date');
	        $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->unique();
            $table->boolean('admin_flg')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->unique(['employee_num','email'],'UNIQUE');

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
        Schema::dropIfExists('users');
    }
}
