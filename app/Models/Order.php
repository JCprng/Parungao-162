<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'order_id';

    protected $fillable = [
        'customer_id',
        'order_date',
        'total_cost',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
