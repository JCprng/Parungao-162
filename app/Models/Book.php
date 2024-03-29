<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $primaryKey = 'book_id';

    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'condition_description',
        'weight_grams',
        'quantity_in_stock',
    ];

    // Relationships
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
