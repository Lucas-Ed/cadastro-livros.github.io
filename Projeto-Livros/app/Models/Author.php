<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['id','nome'];


    public function books()
    {
        return $this->hasMany(Book::class);//retorno do relaciomento entre bancos, é passado a classe do model Book.
    }
}
