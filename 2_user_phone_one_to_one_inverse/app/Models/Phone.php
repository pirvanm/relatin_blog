<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// este optional
//use Models\User;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['phone'];

    // metoda definta de programator 
    // pui ce nume vrei... so crezi tu ... pui ce nume 
    // vrea ... sefu' ... 
    public function user()
    {
        //belongsTo , este o metoda 
    // predefinita de laravel
    // si se foloseste doar in modele 
        return $this->belongsTo(User::class);
        // pentru a adauga un user ai nevoie de un telefon 
        // automat phone apartine 
        // de user 

        // nu poti adauga un nr de telefon fara sa fie pus 
        // la un user 
    }
}
