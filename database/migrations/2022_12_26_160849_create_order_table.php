<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('utility')->nullable()->references('id')->on('utility');
            $table->foreignId('renter')->nullable()->references('id')->on('users');
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->integer('duration');
            $table->integer('totalPrice');
            $table->boolean('active')->default(false);
            $table->boolean('ended')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
