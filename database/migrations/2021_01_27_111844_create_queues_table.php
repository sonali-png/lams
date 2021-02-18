<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->string('queue_id', 6);
            $table->string('queue_name', 30);
            $table->string('user_id', 20);
            $table->string('is_checker_or_maker', 1)->default('')->comment('0-Maker, 1-Checker');
            $table->text('remark');
            $table->tinyInteger('status')->default(0)->comment('0-Inactive, 1-Active');
            $table->tinyInteger('is_deleted')->default(0)->comment('0-No, 1-Yes');
            $table->string('cuser', 20);
            $table->string('uuser', 20);
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
        Schema::dropIfExists('queues');
    }
}
