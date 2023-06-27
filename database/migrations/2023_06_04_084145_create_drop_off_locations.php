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
        Schema::create('campaign_drop_off_locations', function (Blueprint $table) {
            $table->id();
            $table->integer('campaign_id');
            $table->text('location_name');
            $table->text('location_description')->nullable();
            $table->decimal('location_latitude',8,6)->nullable();
            $table->decimal('location_longitude',8,6)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_drop_off_locations');
    }
};
