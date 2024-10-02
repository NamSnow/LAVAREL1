<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'category_id', 'image_url', 'trailer_url'];

    // Mỗi show thuộc về một thể loại
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Một show có nhiều tập phim
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}