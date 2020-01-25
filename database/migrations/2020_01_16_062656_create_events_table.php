<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('description', 1000);

            $table->unsignedBigInteger('pincode');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('college_id');

            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
            $table->boolean('is_one_day');

            $table->softDeletes();
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
        Schema::dropIfExists('events');
    }
}
