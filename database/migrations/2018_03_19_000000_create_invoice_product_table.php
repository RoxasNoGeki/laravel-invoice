<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Invoice_product', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('invoice_id')->index();
            $table->string('qty');
            $table->text('product');
            $table->string('serial')->nullable();
            $table->text('description')->nullable();
            $table->string('subtotal');


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
        Schema::dropIfExists('Invoice_product');
    }
}
