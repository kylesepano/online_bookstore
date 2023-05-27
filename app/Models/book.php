<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'format',
        'grade_level',
        'age_level',
        'language',
        'signed',
        'pre_order',
        'edition'
    ];

    public function book_prices()
    {
        return $this->hasMany(book_price::class, 'book_id');
    }

    public function price($date)
    {
        $price = book_price::where('book_id', $this->id)->where('from', '<=', $date)->where(function ($e) use ($date) {
            $e->where('to', null)->orWhere('to', '>=', $date);
        })->first();
        return $price;
    }
}
