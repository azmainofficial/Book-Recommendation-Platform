<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name', // The name of the category
        'relatable_id',  // ID of a related entity
        'image',         // Path to the image
    ];


    // public function books(){
    //     return $this->hasMany(Book::class);
    // }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function bookss()
    {
        return $this->belongsToMany(Book::class, 'book_category')->withTimestamps();
    }
    
}
