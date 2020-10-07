<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourierProductInfosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('courier_product_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('courier_type');
            $table->integer('courier_quantity');
            $table->double('courier_fee', 8, 2);
            $table->text('courier_details')->nullable();
            $table->string('courier_code');

            $table->integer('courier_info_id')->unsigned()->index();

            $table->foreign('courier_info_id')
                    ->references('id')
                    ->on('courier_infos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('courier_product_infos');
    }

}
