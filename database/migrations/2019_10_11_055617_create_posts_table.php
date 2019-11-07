<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('location_category');
            $table->string('address');
            $table->string('fax');
            $table->string('contact_person');
            $table->string('url');
            $table->string('phone');
            $table->string('mail');
            $table->string('hiring_type')->nullable();
            $table->string('duration')->nullable();
            $table->string('hours')->nullable();
            $table->string('hour_shift')->nullable();
            $table->string('location_type')->nullable();
            $table->string('job_field')->nullable();
            $table->string('applicant_type')->nullable();
            $table->string('other_requirement')->nullable();
            $table->integer('category');
            $table->integer('priority');
            $table->text('detail_info')->nullable();
            $table->string('admin_infoA')->nullable();
            $table->string('admin_infoB')->nullable();
            $table->string('admin_infoC')->nullable();
            $table->string('admin_infoD')->nullable();
            $table->string('admin_infoE')->nullable();
            $table->string('admin_infoF')->nullable();
            $table->string('avatar')->default('default.png');
            $table->string('banner_image')->default('default.png');
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
        Schema::dropIfExists('posts');
    }
}
