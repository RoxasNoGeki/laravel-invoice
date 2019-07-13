<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ORGZ_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('organization_id')->index();
            $table->text('address');
            $table->string('state');
            $table->string('town');
            $table->string('postal_code');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ORGZ_detail');
    }
}
