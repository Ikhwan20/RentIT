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
        Schema::create('utility', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->double('prices');
            $table->double('income');
            $table->string('photo');
            $table->string('category');
            $table->string('status');
            $table->string('description');
            $table->string('location')->nullable();
            $table->foreignId('owner')->nullable()->references('id')->on('users');
            $table->boolean('isRent')->default(false);
            $table->foreignId('renter')->nullable()->references('id')->on('users');
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
        Schema::dropIfExists('utility');
    }
};
