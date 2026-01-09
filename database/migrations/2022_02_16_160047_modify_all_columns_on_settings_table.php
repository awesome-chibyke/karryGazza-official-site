<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAllColumnsOnSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('company_name')->nullable()->change();
            $table->string('email1')->nullable()->change();
            $table->string('email2')->nullable()->change();
            $table->string('phone1')->nullable()->change();
            $table->string('phone2')->nullable()->change();
            $table->string('address1')->nullable()->change();
            $table->string('address2')->nullable()->change();
            $table->string('linkedin')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('facebook')->nullable()->change();
            $table->string('instagram')->nullable()->change();
            $table->string('slogan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
