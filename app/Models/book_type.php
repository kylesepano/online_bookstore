<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function book_criterias()
    {
        return $this->hasMany(book_criteria::class, 'book_type_id');
    }
}
