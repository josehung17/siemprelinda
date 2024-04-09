<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Invoice extends Model
{
    use HasFactory;

    public function payments(): BelongsToMany
    {
        return $this->belongsToMany(Payment::class, 'invoices_payments')->withTimestamps();
    }
}
