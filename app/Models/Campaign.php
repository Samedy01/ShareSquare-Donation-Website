<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'campaign_category_id',
        'title',
        'summary',
        'purpose',
        'goal',
        'raising_cash_amount_goal',
        'raising_cash_amount_collected',
        'start_date',
        'end_date',
        'is_raising',
        'is_cash',
        'is_item',
        'status',
        'approved_by_sys_user_id',
        'rejected_reason',
        'image_thumbnail_path',
        'raising_item_quantity_goal',
        'raising_item_quantity_collected',
        'item_donating_original_quantity',
        'item_donating_remaining_quantity',
        'payment_option',
        'payment_account_number',
        'qr_code_payment_image_path',
        'phone_number',
        'email_address',
        'facebook',
        'telegram',
        'number_of_love',
        'number_of_share',
        'number_of_commment',
        'number_of_view',
        'item_category_id',
        'item_category_name',
        'is_drop_off',
        'drop_off_note',
        'is_delivery',
        'delivery_note',
    ];

    public function campaignCategory(){
        return $this->belongsTo(CampaignCategory::class,'campaign_category_id');
    }
    public function itemCategory(){
        return $this->belongsTo(ItemCategory::class,'item_category_id');
    }
}
