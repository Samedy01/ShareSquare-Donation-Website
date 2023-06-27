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
        Schema::create('user_comment_campaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('campaign_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('comment')->nullable();
            $table->text('image_path')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_comment_campaigns');
    }
};
