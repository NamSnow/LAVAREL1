<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class WatchList extends Model
    {
        use HasFactory;
    
        protected $fillable = ['user_id', 'movie_id', 'category_id', 'movie_name', 'release_year'];
    
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function movie()
        {
            return $this->belongsTo(Movie::class);
        }
    
        public function category()
        {
            return $this->belongsTo(Category::class);
        }
    }
    
?>