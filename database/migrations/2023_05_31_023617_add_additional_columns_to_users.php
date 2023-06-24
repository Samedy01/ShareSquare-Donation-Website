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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username',20)->nullable();
            $table->integer('image_profile_id')->nullable();
            $table->text('image_profile_path')->nullable();
            $table->string('telegram', 20)->nullable();
            $table->integer('number_campaign_created')->nullable()->default(0);
            $table->integer('total_cash_donating_amount')->nullable()->default(0);
            $table->integer('total_cash_raising_amount')->nullable()->default(0);
            $table->integer('total_item_raising_amount')->nullable()->default(0);
            $table->boolean('is_enable_profile_anonymous')->nullable()->default(false);
            $table->string('job_title',20)->nullable();
            $table->text('website')->nullable();
            $table->text('bio')->nullable();
            $table->string('organization',250)->nullable();
            $table->integer('id_card_image_id')->nullable();
            $table->boolean('is_enable_email_notification')->nullable()->default(true);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('username');
            $table->dropColumn('image_profile_id');
            $table->dropColumn('image_profile_path');
            $table->dropColumn('telegram');
            $table->dropColumn('number_campaign_created');
            $table->dropColumn('total_cash_donating_amount');
            $table->dropColumn('total_cash_raising_amount');
            $table->dropColumn('total_item_raising_amount');
            $table->dropColumn('is_enable_profile_anonymous');
            $table->dropColumn('job_title');
            $table->dropColumn('website');
            $table->dropColumn('bio');
            $table->dropColumn('organization');
            $table->dropColumn('id_card_image_id');
            $table->dropColumn('is_enable_email_notification');
        });
    }
};
