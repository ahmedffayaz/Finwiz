<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('account_id');
            $table->enum('type', ['pay_stubs', 'w2s']);
            // Pay Stubs
            $table->json('pay_stubs')->nullable();
            // W2s
            $table->json('w2s')->nullable();
            $table->timestamps();

            $table->string('last_updated_plaid')->nullable();
            $table->string('processing_status')->nullable();
            $table->json('json_response')->nullable();
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
        Schema::dropIfExists('incomes');
    }
}
