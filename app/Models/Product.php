<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        /** @var Product $product */
        static::updating(function ($product) {
            
            if ($product->isDirty('image') && ($product->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($product->getOriginal('image'));
            }
        });
    }

    protected $fillable = ['trademark_id',
                            'unit_id',
                            'package_id',
                            'supplier_id',
                            'name',
                            'amountunit',
                            'amount',
                            'price',
                            'quality',
                            'image'
                        ];

    public function trademark(): BelongsTo
    {
        return $this->belongsTo(Trademark::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }
    public function package(): BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
