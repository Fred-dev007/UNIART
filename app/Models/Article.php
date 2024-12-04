<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        "title",
        "image",
        "content",
        'user_id',
        "file_path",
        "description"
    ];

    // Un article n'a qu'un auteur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
