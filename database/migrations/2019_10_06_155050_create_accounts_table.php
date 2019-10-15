<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            //$table->unsignedBigInteger('user_id');
            $table->string('company_name');
            $table->text('company_address_line_1');
            $table->text('company_address_line_2');
            $table->string('company_country');
            $table->string('company_city');
            $table->string('company_postcode');
            $table->string('company_tel_no');
            $table->string('company_email');
            $table->string('contact_name');
            $table->string('contact_tel_no');
            $table->string('contact_job_title');
            $table->string('contact_email');
            $table->float('total_budget');
            $table->text('services');
        });

//        Schema::table('accounts', function(Blueprint $table) {
//            $table->foreign('user_id')->references('id')->on('users');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
