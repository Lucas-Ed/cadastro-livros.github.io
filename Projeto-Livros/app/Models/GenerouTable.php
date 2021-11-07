<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerouTable extends Model
{
    use HasFactory;
    protected $table = 'generou';
    protected $fillable = ['description'];

    public function id()
    {
        return $this->belongsTo(Book::class);
    }
}
