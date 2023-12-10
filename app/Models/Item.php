<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemName',
        'stock',
        
    ];

    public function mesinSparePart(): HasMany
    {
        return $this->hasMany(MesinSparePart::class);
    }

    public function itemCategory(): HasOne
    {
        return $this->hasOne(ItemCategory::class);
    }
    public function supplierItem(): hasMany
    {
        return $this->hasMany(SupplierItem::class);
    }
}
