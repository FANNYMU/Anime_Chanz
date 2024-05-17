<?php

// app/Models/Article.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image; // Import model Image

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function image()
    {
        return $this->hasOne(Image::class); // Definisikan relasi one-to-one dengan model Image
    }
}
