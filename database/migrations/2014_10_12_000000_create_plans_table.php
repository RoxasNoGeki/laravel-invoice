<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SUBSC_plans', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            //PERIOD WRITTEN AS MONTH
            $table->integer('period');
            $table->string('app_id')->default('BASIL_POS');
            $table->datetime('published_at')->nullable();
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SUBSC_plans');
    }
}
