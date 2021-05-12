<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internlogs', function (Blueprint $table) {
            $table->id();

            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('success')->nullable();
            $table->json('content')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('ip')->nullable();
            $table->string('user_agent')->nullable();

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
        Schema::dropIfExists('internlogs');
    }
}
