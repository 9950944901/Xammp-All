<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFielsOrderTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        if (Schema::hasTable('orders')) {
            Schema::table('orders', function (Blueprint $table) {
               if (!Schema::hasColumn('orders', 'subscription_id')) {
                    $table->integer('subscription_id')->nullable()->default(null)->after('user_id');
               }

              
            });
        }
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('orders')) {
            Schema::table('orders', function (Blueprint $table) {
               if (Schema::hasColumn('orders', 'subscription_id')) {
                  $table->dropColumn('subscription_id');
               }
            });
        }
    }
}
