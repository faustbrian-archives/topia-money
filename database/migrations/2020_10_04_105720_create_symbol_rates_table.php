<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymbolRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symbol_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('symbol_id')->constrained()->cascadeOnDelete();
            $table->string('rate');
            $table->timestamp('date');
            $table->timestamps();

            $table->unique(['symbol_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symbol_rates');
    }
}
