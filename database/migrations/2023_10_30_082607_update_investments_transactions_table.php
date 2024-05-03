<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInvestmentsTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investments_transactions', function (Blueprint $table) {
            $table->dropColumn('investment_type');
            $table->dropColumn('balances');
            $table->dropColumn('mask');
            $table->dropColumn('official_name');

            $table->decimal('amount', 10, 2)->nullable();
            $table->string('cancel_transaction_id')->nullable();
            $table->string('date')->nullable();
            $table->string('fees')->nullable();
            $table->string('investment_transaction_id')->nullable();
            $table->string('iso_currency_code')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('security_id')->nullable();
            $table->string('unofficial_currency_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investments_transactions', function (Blueprint $table) {

            $table->dropColumn('amount');
            $table->dropColumn('cancel_transaction_id');
            $table->dropColumn('date');
            $table->dropColumn('fees');
            $table->dropColumn('investment_transaction_id');
            $table->dropColumn('iso_currency_code');
            $table->dropColumn('price');
            $table->dropColumn('quantity');
            $table->dropColumn('security_id');
            $table->dropColumn('unofficial_currency_code');

            $table->enum('investment_type', ['account', 'investment_transactions']);
            $table->json('balances')->nullable();
            $table->string('mask')->nullable();
            $table->string('official_name')->nullable();
        });
    }
}
