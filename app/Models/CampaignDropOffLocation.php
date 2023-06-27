<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignDropOffLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'campaign_id',
        'location_name',
        'location_description',
        'location_latitude',
        'location_longitude'
    ];
}
