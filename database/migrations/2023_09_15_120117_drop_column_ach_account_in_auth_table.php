<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnAchAccountInAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auth', function (Blueprint $table) {
            $table->dropColumn('numbers');
            $table->dropColumn('balances');
            $table->dropColumn('ach_account');
            $table->dropColumn('ach_account_id');
            $table->dropColumn('routing');
            $table->dropColumn('wire_routing');

            $table->decimal('balances_available', 10, 2)->nullable();
            $table->decimal('balances_current', 10, 2)->nullable();
            $table->string('balances_iso_currency_code')->nullable();
            $table->string('balances_limit')->nullable();
            $table->string('balances_unofficial_currency_code')->nullable();
            $table->json('numbers_ach')->nullable();
            $table->json('numbers_bacs')->nullable();
            $table->json('numbers_eft')->nullable();
            $table->json('numbers_international')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auth', function (Blueprint $table) {
            $table->json('numbers')->nullable();
            $table->string('ach_account')->nullable();
            $table->string('ach_account_id')->nullable();
            $table->string('routing')->nullable();
            $table->string('wire_routing')->nullable();

            $table->dropColumn('balances_available');
            $table->dropColumn('balances_current');
            $table->dropColumn('balances_iso_currency_code');
            $table->dropColumn('balances_limit');
            $table->dropColumn('balances_unofficial_currency_code');
            $table->dropColumn('numbers_ach');
            $table->dropColumn('numbers_bacs');
            $table->dropColumn('numbers_eft');
            $table->dropColumn('numbers_international');

        });
    }
}
