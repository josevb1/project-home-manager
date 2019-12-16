<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('to');
            $table->integer('from');
            $table->boolean('status');
            $table->date('invite_sent');
            $table->date('invite_accepted');
            $table->date('invite_reject');
            $table->date('contact_deleted');
        });

        Schema::create('business_network', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('to');
            $table->integer('from');
            $table->boolean('status');
            $table->date('invite_sent');
            $table->date('invite_accepted');
            $table->date('invite_reject');
            $table->date('contact_deleted');
            $table->integer('contact_role');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts', 'business_network');
    }
}
