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
        Schema::create('route_pickup_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('pickup_point_id');
            $table->Integer('order');
            
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('pickup_point_id')->references('id')->on('pickup_points')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_pickup_points');
    }
};
