<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');

            $table->string('service');
            $table->string('description');
            $table->string('vehicule');
            $table->float('cost');
            $table->string('pay-method');
            $table->string('status');
            $table->string('client-type');
            $table->integer('inventory-number');
            $table->integer('folio');
            $table->string('telephone');
            $table->string('contact');
            $table->string('start-time');
            $table->string('end-time');
            $table->string('driver');

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
        Schema::dropIfExists('entries');
    }
}
