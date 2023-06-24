<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignAdditionalContact extends Model
{
    use HasFactory;
    protected $fillable = ['campaign_id','name','link_red'];

}
