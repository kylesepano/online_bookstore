<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'birthday',
        'nationality',
    ];

    public function book_authors()
    {
        return $this->hasMany(book_author::class, 'author_id');
    }
}
