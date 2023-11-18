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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->integer('howmanyyearex');
            $table->text('des1');
            $table->text('des2');
            $table->text('des3');
            $table->text('des4');
            $table->string('imageone');
            $table->string('imagetwo');
            $table->integer('allclientsnum');
            $table->text('clientdes');
            $table->integer('allprojectsnum');
            $table->text('projectdes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
