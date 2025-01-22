<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'series',
        'title',
        'sub_title',
        'author_id',
        'img_url',
        'pdf_url',
        'language',
        'bio',
        'pages',
        'publish_date',
        'total_view',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category')->withTimestamps();
    }


    public function ratings()
    {
        return $this->hasMany(BookRating::class);
    }

    public function trackings()
    {
        return $this->hasMany(UserTracking::class, 'book_id');
    }

    public function readLaters()
    {
        return $this->hasMany(ReadLater::class, 'book_id');
    }
    public function reads()
    {
        return $this->hasMany(Read::class, 'book_id');
    }
}
