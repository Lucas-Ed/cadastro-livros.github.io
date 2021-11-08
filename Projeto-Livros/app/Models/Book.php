<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['author_id','title','description','amount','isbn'];

    public function author()//author o tipo de modelo para puxar
    {                 // pertence á
        return $this->belongsTo(Author::class);// hasOne(modelo de relacionamento) //Author é o nome do modelo, a ser passado.     
     }                                             //belongsTo(modelo de relacionamento)
                //1:N-parte 1
      //  public function description()
        //{
          //  return $this->hasMany( GenerouTable::class);
        //}
}