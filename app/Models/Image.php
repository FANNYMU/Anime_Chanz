<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'article_id',
        'image_url',
    ];

    // Definisikan relasi belongsTo dengan model Article
    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id'); // Tentukan nama kolom kunci asing 'article_id'
    }
}
