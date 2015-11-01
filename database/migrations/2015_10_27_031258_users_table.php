<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->integer('runs');
            $table->integer('outs');
            $table->integer('Innings');
            $table->integer('sixes');
            $table->integer('fours');
            $table->integer('Average');
            $table->integer('Highest_score');
            $table->integer('wickets');
            $table->integer('overs');
            $table->integer('runs_conceded');
            $table->integer('maidens');
            $table->integer('economy');
            $table->string('best_figures');
            $table->integer('catches');
            $table->integer('run_outs');
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
       Schema::drop('users');
    }
}
