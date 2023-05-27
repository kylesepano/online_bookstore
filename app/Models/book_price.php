<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_price extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'from',
        'to',
        'currency',
        'amount',
    ];

    public function book()
    {
        return $this->belongsTo(book::class, 'book_id');
    }
}
