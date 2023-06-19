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
        Schema::create('campaign_donated_items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('campaign_id');
            $table->integer('item_category_id')->nullable();
            $table->integer('quantity');
            $table->string('item_name',50)->nullable();
            $table->boolean('is_donating_drop_off')->nullable();
            $table->boolean('is_donating_by_delivery')->nullable();
            $table->text('drop_off_note')->nullable();
            $table->text('delivery_note')->nullable();
            $table->text('phone_number');
            $table->text('email')->nullable();
            $table->text('facebook')->nullable();
            $table->text('telegram')->nullable();
            $table->string('status',10);
            $table->date('donation_date')->nullable();
            $table->date('reachable_date')->nullable();
            $table->time('reachable_time')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign_donated_items');

    }
};
