<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'product_id', 'payment_status', 'midtrans_url', 'midtrans_booking_code'];
    
    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    public function Product(): Belongsto
    {
        return $this->belongsTo(Product::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
}
}