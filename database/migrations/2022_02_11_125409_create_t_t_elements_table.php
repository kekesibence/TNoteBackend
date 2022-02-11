<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_t_elements', function (Blueprint $table) {
            $table->int('ttid');
            $table->string('day');
            $table->string('title');
            $table->string('description');
            $table->time('start');
            $table->time('end');
            $table->boolean('repeating');
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
        Schema::dropIfExists('t_t_elements');
    }
}
