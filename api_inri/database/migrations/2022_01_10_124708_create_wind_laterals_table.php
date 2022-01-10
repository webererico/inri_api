<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWindLateralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wind_laterals', function (Blueprint $table) {
            $table->id();
            $table->double('max', 8, 2);
            $table->double('min', 8, 2);
            $table->double('deviation', 8, 2);
            $table->double('average', 8, 2);
            $table->integer('count');
            $table->boolean('status');
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
        Schema::dropIfExists('wind_laterals');
    }
}
