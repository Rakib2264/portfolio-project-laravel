<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skill_education', function (Blueprint $table) {
            $table->id();
            $table->string("shortdes")->nullable();
            $table->string("html")->nullable();
            $table->string("css")->nullable();
            $table->string("bootstrap")->nullable();
            $table->string("js")->nullable();
            $table->string("jquery")->nullable();
            $table->string("ajax")->nullable();
            $table->string("php")->nullable();
            $table->string("php_oop")->nullable();
            $table->string("laravel")->nullable();
            $table->string("restapi")->nullable();          
            $table->string("webdevdes")->nullable();
            $table->string("exyear")->nullable();
            $table->string("excompany")->nullable();
            $table->string("degree")->nullable();
            $table->string("degyear")->nullable();
            $table->string("instiute")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_education');
    }
};
