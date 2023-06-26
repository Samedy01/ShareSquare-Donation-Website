<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampaignCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','is_enabled'];
    public function campaigns()
    {
        return $this->hasMany(Campaign::class, 'campaign_category_id');
    }
    public function campaignCategory()
    {
        return $this->belongsTo(CampaignCategory::class, 'campaign_category_id');
    }
}
