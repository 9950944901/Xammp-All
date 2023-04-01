<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable()->default(0);
            $table->integer('subscription_id')->unsigned()->nullable()->default(0);
            $table->integer('course_id')->unsigned()->nullable()->default(0);
            $table->string('payment_status')->nullable()->default(null);
            $table->string('payment_id')->nullable()->default(null);
            $table->float('amount')->nullable()->default(0);
            $table->date('expiry_date')->nullable()->default(null);
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
        Schema::dropIfExists('subscription_purchases');
    }
}
