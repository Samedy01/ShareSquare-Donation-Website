<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_subtitle_id',
        'image_id',
        'image_path',
        'ordered',
    ];
}
