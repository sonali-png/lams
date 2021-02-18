<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_modules', function (Blueprint $table) {
            $table->id();
            $table->string('app_id', 4);
            $table->string('module_id', 6)->unique();
            $table->string('module_name', 30)->unique();
            $table->smallInteger('no_of_approvals');
            $table->tinyInteger('type_of_notification')->default(0)->comment('0-Inactive, 1-Active');
            $table->json('fields');
            $table->tinyInteger('is_workflow_dependant')->default(0)->comment('0-no, 1-yes');
            $table->tinyInteger('is_checker_required')->default(0)->comment('0-no, 1-yes');
            $table->tinyInteger('is_used_for_creation')->default(0)->comment('0-no, 1-yes');
            $table->string('cuser', 20);
            $table->string('uuser', 20);
            $table->tinyInteger('status')->default(0)->comment('0-Inactive, 1-Active');
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
        Schema::dropIfExists('app_modules');
    }
}
