<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inv_template', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('issuer');
            $table->text('billed_to');
            $table->text('lines')->nullable();
            $table->char('prefix_no',60)->index();
            $table->text('payment_option');
            $table->string('send_option');
            $table->text('payment_terms');

            $table->integer('repeat_in_days')->nullable();
            $table->integer('repeat_in_months')->nullable();
            $table->integer('due_in_days')->nullable();
            $table->integer('due_in_months')->nullable();

            $table->string('user_id')->index();
            $table->string('layout');
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
        Schema::dropIfExists('Inv_template');
    }
}
