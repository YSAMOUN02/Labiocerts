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
        Schema::create('service_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id'); 
            $table->integer('no');
            $table->string('title_category');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('service')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_category');
    }
};
