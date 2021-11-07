<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','amount','isbn'];

    public function Author()//author o tipo de modelo para puxar
    {
        return $this->hasOne(Author::class);// hasOne(modelo de relacionamento) //Author é o nome do modelo, a ser passado.

    

    
}
                //1:N-parte 1
        public function description()
        {
            return $this->hasMany( GenerouTable::class);
        }
}