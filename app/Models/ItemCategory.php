<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemCategory extends Model
{

    public function items()
    {
        return $this->hasMany(Item::class, 'categoryId', 'categoryId');
    }
    use HasFactory;
}
