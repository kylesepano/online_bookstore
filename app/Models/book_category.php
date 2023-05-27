<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'book_criteria_id',
    ];

    public function book_genre()
    {
        return $this->hasMany(book_genre::class, 'book_category_id');
    }
    public function book_criteria()
    {
        return $this->belongsTo(book_criteria::class, 'book_criteria_id');
    }
}
