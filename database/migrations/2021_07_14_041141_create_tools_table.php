<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('initials')->nullable();
            $table->string('logo')->default('site/img/attachment/tool/logo.png');
            $table->string('background')->default('site/img/attachment/tool/background.jpg');
            $table->string('bkgd_poster')->nullable();
            $table->string('bkgd_slide')->nullable();
            $table->string('bkgd_certificate')->nullable();
            $table->integer('from')->nullable();
            $table->string('color')->default('#000000');

            $table->unsignedBigInteger('ministery_id')->nullable();
            $table->foreign('ministery_id')->references('id')->on('ministeries')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tools');
    }
}
