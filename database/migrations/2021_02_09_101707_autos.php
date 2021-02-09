<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Autos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function(Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('type');
            $table->string('bouwdatum');
            $table->string('image');
            $table->integer('inkoop');
            $table->integer('verkoop');
            $table->string('kenteken');
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
        //
    }
}
