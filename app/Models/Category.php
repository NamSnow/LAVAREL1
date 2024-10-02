<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Một thể loại có nhiều phim
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    // Một thể loại có nhiều show
    public function shows()
    {
        return $this->hasMany(Show::class);
    }

    public function watchLists()
{
    return $this->hasMany(WatchList::class);
}

}