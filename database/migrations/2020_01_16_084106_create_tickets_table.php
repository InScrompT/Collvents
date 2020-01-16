<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('event_id');

            $table->string('name');
            $table->string('description', 1000);

            $table->integer('quantity')->default(0); // Unlimited
            $table->integer('available')->nullable();
            $table->float('price')->default(0.0);

            $table->boolean('free')->default(true);
            $table->boolean('multiple_ticket')->default(false);
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
        Schema::dropIfExists('tickets');
    }
}
