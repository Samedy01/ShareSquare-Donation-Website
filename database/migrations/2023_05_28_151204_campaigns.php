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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            $table->string('title',200);
            $table->text('summary')->nullable();
            $table->text('purpose')->nullable();
            $table->text('goal')->nullable();
            $table->integer('campaign_category_id')->nullable();
            $table->text('image_thumbnail_path')->nullable();

            $table->boolean('is_raising')->nullable();

            $table->boolean('is_cash')->nullable();
            $table->boolean('is_item')->nullable();

            $table->bigInteger('raising_cash_amount_goal')->nullable();
            $table->bigInteger('raising_cash_amount_collected')->nullable();
            $table->integer('raising_item_quantity_goal')->nullable();
            $table->integer('raising_item_quantity_collected')->nullable();
            $table->integer('item_donating_original_quantity')->nullable();
            $table->integer('item_donating_remaining_quantity')->nullable();

            $table->integer('item_category_id')->nullable();
            $table->string('item_category_name',20)->nullable();

            $table->boolean('is_drop_off')->nullable();
            $table->text('drop_off_note')->nullable();
            $table->boolean('is_delivery')->nullable();
            $table->text('delivery_note')->nullable();

            $table->string('status',50)->nullable();
            $table->text('rejected_reason')->nullable();
            $table->integer('approved_by_sys_user_id')->nullable();

            $table->string('phone_number',30)->nullable();
            $table->string('email_address',100)->nullable();
            $table->string('telegram',30)->nullable();
            $table->text('facebook')->nullable();

            $table->integer('number_of_love')->nullable()->default(0);
            $table->integer('number_of_share')->nullable()->default(0);
            $table->integer('number_of_comment')->nullable()->default(0);
            $table->integer('number_of_view')->nullable()->default(0);

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
