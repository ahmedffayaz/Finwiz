<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user'); // Adding 'role' column with default value 'user'
            $table->string('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('years_of_working')->nullable();
            $table->string('retire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role'); // Removing the 'role' column
            $table->dropColumn('date_of_birth');
            $table->dropColumn('address');
            $table->dropColumn('employment_status');
            $table->dropColumn('years_of_working');
            $table->dropColumn('retire');
        });
    }
}
