<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('source_id')->constrained('assets')->cascadeOnDelete();
            $table->foreignId('target_id')->constrained('assets')->cascadeOnDelete();
            $table->string('rate');
            $table->timestamp('date');
            $table->timestamps();

            $table->unique(['source_id', 'target_id', 'date']);

            $table->index(['source_id', 'target_id']);
            $table->index(['source_id', 'target_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_rates');
    }
}
