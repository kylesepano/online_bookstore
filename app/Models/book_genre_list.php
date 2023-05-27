<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_genre_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'book_genre_id',
    ];

    public function book_genre()
    {
        return $this->belongsTo(book_genre::class, 'book_genre_id');
    }
    public function book()
    {
        return $this->belongsTo(book::class, 'book_id');
    }
}
