<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMissingColumnsGeneralSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('general_settings', function (Blueprint $table) {
            $table->string('about_us_quote_one', 191)->nullable()->after('total_deliver');
            $table->string('about_us_quote_two', 191)->nullable()->after('about_us_quote_one');
            $table->string('about_us_quote_three', 191)->nullable()->after('about_us_quote_two');
            $table->text('map')->nullable()->after('about_us_quote_three');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
