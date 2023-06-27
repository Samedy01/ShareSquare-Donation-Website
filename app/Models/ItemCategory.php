<?php

namespace App\Models;

/**
 * ItemCategory
 *
 * @var \App\Models\ItemCategory $itemCategory
 *
 * @property int $id
 * @property string $name
 * @property boolean $is_enable
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 */

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','is_enabled'];
}
