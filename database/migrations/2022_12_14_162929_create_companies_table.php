<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('field_main_business');
            $table->string('company_name');
            $table->string('field_brief');
            $table->string('country_code');
            $table->string('address');
            $table->string('city');
            $table->string('province')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('telephone_num');
            $table->string('fax_num')->nullable();
            $table->string('website_url');
            $table->string('company_registration_num');
            $table->string('map_geocode')->nullable();
            $table->string('map_latitude')->nullable();
            $table->string('map_logitude')->nullable();
            $table->string('logo')->nullable();
            $table->string('company_profile_logo')->nullable();
            $table->string('image_gallery')->nullable();
            $table->string('brands_logo')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
