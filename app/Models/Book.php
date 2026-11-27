<?php

namespace App\Models;

use Database\Factories\BookFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    /** @use HasFactory<BookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'publication_year',
        'cover_url',
    ];

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
