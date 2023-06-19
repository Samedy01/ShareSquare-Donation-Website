<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignDonatedItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'campaign_id',
        'item_category_id',
        'item_name',
        'quantity',
        'phone_number',
        'email',
        'facebook',
        'telegram',
        'is_donating_drop_off',
        'is_donating_by_delivery',
        'drop_off_note',
        'delivery_note',
        'status',
        'donation_date',
        'reachable_date',
        'reachable_time'
    ];
}
