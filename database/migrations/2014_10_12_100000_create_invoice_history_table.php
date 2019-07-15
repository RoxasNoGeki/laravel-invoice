<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inv_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no')->index();
            $table->string('issued_at')->index();
            $table->dateTime('due_at')->index();
            $table->text('billed_to');
            $table->text('issuer');
            $table->text('lines');
            $table->text('payment_option');
            $table->text('payment_terms');
            $table->string('is_send')->default('0');

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
        Schema::dropIfExists('Inv_history');
    }
}
