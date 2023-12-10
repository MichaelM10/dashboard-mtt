<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function supplierItem(): HasMany
    {
        return $this->hasMany(SupplierItem::class);
    }
    use HasFactory;
}
