<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourierInfosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('courier_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_branch_id')->unsigned()->index();

            $table->foreign('sender_branch_id')
                    ->references('id')
                    ->on('branches');

            $table->string('sender_name');
            $table->string('sender_email')->nullable();
            $table->string('sender_phone');
            $table->text('sender_address')->nullable();
            $table->integer('receiver_branch_id')->unsigned()->index();

            $table->foreign('receiver_branch_id')
                    ->references('id')
                    ->on('branches');

            $table->string('receiver_name');
            $table->string('receiver_email')->nullable();
            $table->string('receiver_phone');
            $table->text('receiver_address')->nullable();
            $table->string('invoice_id');
            $table->enum('status', ['Delivered', 'Received'])->default('Delivered');
            $table->integer('sender_branch_staff_id')->unsigned()->index()->nullable();

            $table->foreign('sender_branch_staff_id')
                    ->references('id')
                    ->on('users');

            $table->integer('receiver_branch_staff_id')->unsigned()->index()->nullable();

            $table->foreign('receiver_branch_staff_id')
                    ->references('id')
                    ->on('users');

            $table->integer('payment_receiver_id')->nullable();

            $table->integer('payment_branch_id')->nullable();

            $table->enum('payment_status', ['Unpaid', 'Paid'])->default('Unpaid');

            $table->string('payment_method_name')->nullable();

            $table->string('payment_transaction_id')->nullable();

            $table->string('payment_date')->nullable();

            $table->double('payment_balance', 8, 2)->nullable();

            $table->string('payment_transaction_image')->nullable();

            $table->text('payment_note')->nullable();

            $table->string('code');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('courier_infos');
    }

}
