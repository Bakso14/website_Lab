<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "news_categories_id", "author", "title", "slug", "content", "image", "views"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class, "news_categories_id");
    }
}
