<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Rate;
use App\Models\Review;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'cover',
        'price',
        'discount',
        'description',
        'creator'
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_authors');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genres');
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
