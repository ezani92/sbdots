<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('transaction_id');
            $table->string('transaction_type');
            $table->string('deposit_type')->nullable();
            $table->text('data');
            $table->decimal('amount',10,2);
            $table->integer('bank_id')->nullable();
            $table->string('datetime')->nullable();
            $table->string('refference_no')->nullable();
            $table->string('receipt_file')->nullable();
            $table->integer('bonus_id')->nullable();
            $table->integer('status');
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
