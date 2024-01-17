<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publishers';

    protected $primaryKey = 'publisher_id';

    protected $fillable = [
        'name',
        'address',
        'contact_info',
    ];

    // Relationships
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
