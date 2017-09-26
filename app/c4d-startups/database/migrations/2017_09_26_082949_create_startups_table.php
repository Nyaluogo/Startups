<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('domain');
            $table->date('date_founded');
            $table->string('networth')->nullable();
            $table->text('description');
            $table->string('document_path')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('phone_number');
            $table->integer('status');
            $table->integer('user_id');
            $table->string('linkedin')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('startups');
    }
}
