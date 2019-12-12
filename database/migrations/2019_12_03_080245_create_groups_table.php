<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('business_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('image')->nullable();
            $table->integer('created_by_id')->nullable();
            $table->integer('owner_id')->nullable();
            // $table->string('owner_type');
            $table->integer('admins')->nullable();
            $table->integer('members')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('property_id')->nullable();
            $table->integer('appliance_id')->nullable();
            $table->integer('warranty_id')->nullable();
            $table->integer('restriction_id')->nullable();
            $table->integer('services_id')->nullable();
            $table->string('notes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
