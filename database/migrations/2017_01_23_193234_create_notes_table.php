<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ipcr_id');
            $table->string('MFI');
            $table->string('successIndicator');
            $table->string('actualaccomplishments');
            $table->string('distribution');
            $table->integer('Q1');
            $table->integer('E2');
            $table->integer('T3');
            $table->float('A4');
            $table->float('Ave');
            $table->string('Remarks');
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
        Schema::dropIfExists('notes');
    }
}
