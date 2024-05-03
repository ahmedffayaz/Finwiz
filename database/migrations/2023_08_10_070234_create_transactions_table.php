<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('account_id')->nullable();
            $table->string('account_owner')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->date('authorized_date')->nullable();
            $table->dateTime('authorized_datetime')->nullable();
            $table->string('category')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('check_number')->nullable();
            $table->date('date')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('iso_currency_code')->nullable();
            $table->string('location')->nullable();
            $table->string('merchant_name')->nullable();
            $table->string('name')->nullable();
            $table->string('payment_channel')->nullable();
            $table->text('payment_meta')->nullable();
            $table->boolean('pending')->nullable();
            $table->unsignedBigInteger('pending_transaction_id')->nullable();
            $table->string('personal_finance_category')->nullable();
            $table->string('transaction_code')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('unofficial_currency_code')->nullable();
            $table->json('json_response')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories');
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
