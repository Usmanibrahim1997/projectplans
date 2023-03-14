<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('project_id')->nullable();
            $table->string('item')->nullable();
            $table->string('person')->nullable();
            $table->string('marterial_request')->nullable();
            $table->string('request_for_quote')->nullable();
            $table->string('mta_approval')->nullable();
            $table->string('vender_manufacturing')->nullable();
            $table->string('po_num')->nullable();
            $table->string('po_status')->nullable();
            $table->string('unit')->nullable();
            $table->string('quantity')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('total_po_value')->nullable();
            $table->string('total_po_value_with_tax')->nullable();
            $table->string('drawing_submission')->nullable();
            $table->string('drawing_approval')->nullable();
            $table->string('febrication_status')->nullable();
            $table->string('delivary_schedule')->nullable();
            $table->string('balance_delivary')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('balance_amount')->nullable();
            $table->string('timeline')->nullable();
            $table->string('status')->nullable();
            $table->string('Date')->nullable();
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
        Schema::dropIfExists('project_data');
    }
}
