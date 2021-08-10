<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function post()
    {
        // leaga tabelul Coments de Postare print metoda belongs
        return $this->belongsTo(Post::class);
        // metoda belongsTo "2 clase sunt dependente una de alta"
    }
}
