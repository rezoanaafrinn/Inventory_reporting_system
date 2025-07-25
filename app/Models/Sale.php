<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'discount',
        'vat',
        'total_amount',
        'paid_amount',
        'due_amount',
    ];
}
