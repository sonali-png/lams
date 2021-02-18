<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_department', function (Blueprint $table) {
            $table->id();
            $table->string('department_code', 30)->unique();
            $table->string('department_name', 100)->unique();
            $table->string('app_id', 4);
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
        Schema::dropIfExists('master_department');
    }
}
