<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'book_category_id',
    ];

    public function book_genre_lists()
    {
        return $this->hasMany(book_genre_list::class, 'book_genre_id');
    }
    public function book_category()
    {
        return $this->belongsTo(book_category::class, 'book_category_id');
    }
}
