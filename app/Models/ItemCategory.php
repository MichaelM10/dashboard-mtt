<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
    use HasFactory;
}
