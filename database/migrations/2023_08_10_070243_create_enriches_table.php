<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrich', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('account_id')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('description')->nullable();
            $table->string('direction')->nullable();
            $table->json('enrichments')->nullable();
            $table->string('plaid_id')->nullable();
            $table->string('iso_currency_code')->nullable();
            $table->json('json_response')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enriches');
    }
}
