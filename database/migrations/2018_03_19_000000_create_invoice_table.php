<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Invoice', function (Blueprint $table) {
			$table->increments('id');
			$table->char('uuid',60)->index();
			$table->string('order_id');
			$table->date('payment_due');
			$table->string('name');
			$table->string('subscription_id')->index();


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
		Schema::dropIfExists('SMSGW_queues');
	}
}
