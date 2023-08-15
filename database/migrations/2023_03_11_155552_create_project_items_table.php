<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            // $table->string('created_date')->nullable();
            $table->string('department_name')->nullable();
            $table->string('service_type')->nullable();
            $table->string('material_description')->nullable();
            $table->string('unit')->nullable();
            $table->string('size')->nullable();
            $table->string('quantity')->nullable();
            $table->string('used_for')->nullable();
            $table->string('requried_at')->nullable();
            $table->string('location')->nullable();
            $table->string('remark')->nullable();
            $table->string('attachment')->nullable();
            $table->string('sub_item_name');
            $table->string('status');
            $table->string('owner_name');
            $table->string('date');
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
        Schema::dropIfExists('project_items');
    }
}
