<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measured_power', function (Blueprint $table) {
            $table->id();
            $table->double('max', 8, 2);
            $table->double('min', 8, 2);
            $table->double('deviation', 8, 2);
            $table->double('average', 8, 2);
            $table->integer('count');
            $table->timestamps();
        });

        Schema::table('measured_power', function (Blueprint $table) {
            $table->foreignId('status_id')->constrained('inversor_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measured_power');
    }
}
