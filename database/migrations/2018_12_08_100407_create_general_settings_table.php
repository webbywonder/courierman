<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title')->nullable();
            $table->string('header_title')->nullable();
            $table->text('header_subtitle')->nullable();
            $table->string('testimonial_title')->nullable();
            $table->text('testimonial_details')->nullable();
            $table->string('search_courier_title')->nullable();
            $table->text('search_courier_details')->nullable();
            $table->string('aboutus_keyword')->nullable();
            $table->string('aboutus_title')->nullable();
            $table->text('aboutus_details')->nullable();
            $table->string('gallery_title')->nullable();
            $table->text('gallery_details')->nullable();
            $table->string('service_title')->nullable();
            $table->text('service_details')->nullable();
            $table->text('footer_text')->nullable();
            $table->string('contact_title')->nullable();
            $table->text('contact_address')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->text('address')->nullable();
            $table->string('color_code')->nullable();
            $table->enum('email_notification', [0, 1])->default(0);
            $table->string('email_sent_from')->nullable();
            $table->longText('email_template')->nullable();
            $table->text('sms_api')->nullable();
            $table->integer('departure_courier')->nullable();
            $table->integer('upcoming_courier')->nullable();
            $table->integer('total_deliver')->nullable();
            $table->enum('sms_notification', [0, 1])->default(0);
            $table->enum('registration_verification', [0, 1])->default(0);
            $table->enum('email_verification', [0, 1])->default(0);
            $table->enum('sms_verification', [0, 1])->default(0);
            $table->string('base_currency')->nullable();
            $table->string('base_currency_symbol')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('general_settings');
    }

}
