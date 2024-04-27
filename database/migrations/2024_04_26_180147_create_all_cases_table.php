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
        Schema::create('all_cases', function (Blueprint $table) {
            $table->id();
            $table->integer('p_id');
            $table->integer('c_id')->unique();
            $table->integer('nid');
            $table->string('name');
            $table->integer('contact')->nullable();
            $table->string('clause');
            $table->string('title');
            $table->string('area');
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
        Schema::dropIfExists('all_cases');
    }
};
