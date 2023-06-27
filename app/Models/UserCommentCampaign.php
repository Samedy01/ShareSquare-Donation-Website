<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCommentCampaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'campaign_id',
        'user_id',
        'comment',
        'image_path'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
