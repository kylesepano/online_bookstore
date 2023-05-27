<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'book_type_id',
    ];

    public function book_categories()
    {
        return $this->hasMany(book_category::class, 'book_criteria_id');
    }
    public function book_type()
    {
        return $this->belongsTo(book_type::class, 'book_type_id');
    }
}
