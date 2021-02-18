<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDesignationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_designation', function (Blueprint $table) {
            $table->id();
            $table->string('designation_code', 30)->unique();
            $table->string('designation_name', 100)->unique();
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
        Schema::dropIfExists('master_designation');
    }
}
