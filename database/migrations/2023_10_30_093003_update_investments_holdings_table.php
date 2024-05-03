<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInvestmentsHoldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investments_holdings', function (Blueprint $table) {
            $table->dropColumn('investment_type');
            $table->dropColumn('balances');
            $table->dropColumn('mask');
            $table->dropColumn('official_name');
            $table->dropColumn('subtype');
            $table->dropColumn('type');
            $table->dropColumn('name');

            $table->string('cost_basis')->nullable();
            $table->string('institution_price')->nullable();
            $table->string('institution_price_as_of')->nullable();
            $table->string('institution_price_datetime')->nullable();
            $table->string('institution_value')->nullable();
            $table->string('iso_currency_code')->nullable();
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
        Schema::table('investments_holdings', function (Blueprint $table) {

            $table->dropColumn('cost_basis');
            $table->dropColumn('institution_price');
            $table->dropColumn('institution_price_as_of');
            $table->dropColumn('institution_price_datetime');
            $table->dropColumn('institution_value');
            $table->dropColumn('iso_currency_code');
            $table->dropColumn('quantity');
            $table->dropColumn('security_id');
            $table->dropColumn('unofficial_currency_code');

            $table->enum('investment_type', ['account', 'investment_transactions']);
            $table->json('balances')->nullable();
            $table->string('name')->nullable();
            $table->string('mask')->nullable();
            $table->string('official_name')->nullable();
            $table->string('subtype')->nullable();
            $table->string('type')->nullable();
        });
    }
}
