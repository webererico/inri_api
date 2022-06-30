<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalEnergiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_energy', function (Blueprint $table) {
            $table->id();
            $table->double('value', 8, 2);
            $table->timestamps();
        });

        Schema::table('total_energy', function (Blueprint $table) {
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
        Schema::dropIfExists('total_energy');
    }
}
