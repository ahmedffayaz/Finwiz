<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('type');
            $table->string('label')->nullable()->after('mask');
            $table->decimal('amount', 10, 2)->nullable()->after('historical_balances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->dropColum('avatar');
            $table->dropColum('label');
            $table->dropColum('amount');
        });
    }
}
