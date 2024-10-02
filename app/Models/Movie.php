<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'release_date', 'duration', 'category_id', 'image_url', 'trailer_url'];

    // Mỗi phim thuộc về một thể loại
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function watchLists()
{
    return $this->hasMany(WatchList::class);
}

}