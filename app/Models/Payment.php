<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Payment extends Model
{
    use HasFactory;

    public function purchases(): BelongsToMany
    {
        return $this->belongsToMany(Purchase::class, 'payments_purchases')->withTimestamps();
    }

        public function invoices(): BelongsToMany
    {
        return $this->belongsToMany(Invoice::class, 'invoices_payments')->withTimestamps();
    }
}
