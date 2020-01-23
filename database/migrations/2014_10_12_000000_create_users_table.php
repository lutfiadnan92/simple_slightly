<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('amount');
            $table->text('status');
            $table->dateTime('timestamp');
            $table->text('bank_code');
            $table->string('account_number',20);
            $table->text('beneficiary_name');
            $table->text('remark');
            $table->text('receipt');
            $table->dateTime('time_served');
            $table->bigInteger('fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
