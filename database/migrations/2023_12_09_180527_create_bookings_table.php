<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->string('property_name')->nullable();
            $table->string('property_type_id')->nullable();
            $table->string('property_type_name')->nullable();
            $table->string('parent_cat_id')->nullable();
            $table->string('child_cat_id')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('total_paid_amount')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('how_many_guest')->nullable();
            $table->string('customer_notes')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('property_information')->nullable();
            $table->string('statuses')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
