<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
               if (!Schema::hasColumn('users', 'subscription_id')) {
                    $table->integer('subscription_id')->nullable()->default(null)->after('status');
               }

               if (!Schema::hasColumn('users', 'expiry_date')) {
                $table->date('expiry_date')->nullable()->default(null)->after('subscription_id');
                }
            
                if (!Schema::hasColumn('users', 'course_id')) {
                        $table->integer('course_id')->nullable()->default(null)->after('expiry_date');
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
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
               if (Schema::hasColumn('users', 'subscription_id')) {
                    $table->dropColumn('subscription_id');
               }

               if (Schema::hasColumn('users', 'expiry_date')) {
                $table->dropColumn('expiry_date');
                }
            
                if (Schema::hasColumn('users', 'course_id')) {
                        $table->dropColumn('course_id');
                }
            });
        }
    }
}
