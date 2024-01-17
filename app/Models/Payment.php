<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'order_id',
        'payment_date',
        'payment_method',
        'amount',
    ];

    // Relationships
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
