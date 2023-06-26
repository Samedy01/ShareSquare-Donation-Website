<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignDonatedCash extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'campaign_id',
        'original_amount',
        'total_amount',
        'commission_rate',
        'donation_date',
        'payment_method',
        'is_successful',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function campaign(){
        return $this->belongsTo(Campaign::class,'campaign_id');
    }
}
