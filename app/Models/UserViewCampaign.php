<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserViewCampaign extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','campaign_id','is_view'];
}
