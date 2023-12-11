<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    public function mesinSparePart(): HasMany
    {
        return $this->hasMany(MesinSparePart::class);
    }

    public function itemCategory()
    {
        return $this->belongsTo(ItemCategory::class, 'categoryId', 'categoryId');
    }
    public function supplierItem(): HasMany
    {
        return $this->hasMany(SupplierItem::class);
    }
}
