<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->float('TotalAmount');
            $table->float('Discount');
            $table->float('Discount_Percent');
            $table->float('PayableAmount');
            $table->float('AmountLeft');
            $table->float('AmountPaid');
            $table->string('DateIssued');
            $table->string('DateDue');
            $table->string('InvoiceID');
            $table->string('InvoiceNumber');
            $table->string('IndexNumber');
            $table->string('Parent_id');
            $table->string('StudentName');
            $table->string('classroom_id');
            $table->string('PaymentStatus');
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
        Schema::dropIfExists('invoices');
    }
}
