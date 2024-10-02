<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'episode_number', 'season_number', 'show_id', 'duration', 'air_date'];

    // Mỗi tập phim thuộc về một show
    public function show()
    {
        return $this->belongsTo(Show::class);
    }
}