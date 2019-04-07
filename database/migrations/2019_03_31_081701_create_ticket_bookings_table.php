<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('bus_id')->index();
            $table->unsignedInteger('route_id')->index();
            $table->date('going_date');
            $table->date('purchase_date');
            $table->string('price');
            $table->integer('user_type')->index(); // 1 = registered , 2 = customer

            $table->timestamps();

            $table->index(['user_id','bus_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_bookings');
    }
}
