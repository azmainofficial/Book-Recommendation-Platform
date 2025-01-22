<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'profile_img',
    ];

    public function ratings()
{
    return $this->hasMany(BookRating::class, 'user_id');
}

public function trackings()
{
    return $this->hasMany(UserTracking::class, 'user_id');
}
public function readLaters()
{
    return $this->hasMany(ReadLater::class, 'user_id');
}
public function reads()
{
    return $this->hasMany(Read::class, 'user_id');
}


}
