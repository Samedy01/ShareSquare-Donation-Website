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
        Schema::table('campaigns', function (Blueprint $table) {
            $table->integer('raising_item_quantity_goal')->default(0)->change();
            $table->integer('raising_item_quantity_collected')->default(0)->change();
            $table->bigInteger('raising_cash_amount_collected')->default(0)->change();
            $table->bigInteger('raising_cash_amount_goal')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->integer('raising_item_quantity_goal')->default(null)->change();
            $table->integer('raising_item_quantity_collected')->default(null)->change();
            $table->bigInteger('raising_cash_amount_collected')->default(null)->change();
            $table->bigInteger('raising_cash_amount_goal')->default(null)->change();
        });
    }
};
