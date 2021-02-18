<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();  
            $table->string('name', 50);
            $table->text('address');
            $table->string('email', 100);
            $table->string('password', 255);
            $table->string('cuser', 20);
            $table->string('uuser', 20);
            $table->tinyInteger('is_enabled')->default(0)->comment('0-Inactive, 1-Active');
            $table->tinyInteger('is_deleted')->default(0)->comment('0-No, 1-Yes');
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
        Schema::dropIfExists('admins');
    }
}
