<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('account_id');
            $table->json('balances')->nullable();
            $table->string('mask')->nullable();
            $table->string('name')->nullable();
            $table->string('official_name')->nullable();
            $table->string('subtype')->nullable();
            $table->string('type')->nullable();
            $table->json('numbers')->nullable();
            $table->string('ach_account')->nullable();
            $table->string('ach_account_id')->nullable();
            $table->string('routing')->nullable();
            $table->string('wire_routing')->nullable();
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
        Schema::dropIfExists('auths');
    }
}
