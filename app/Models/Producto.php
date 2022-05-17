<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';
    public $timestamps=false;
    public $fillable = [   'nombre','categoria','tipo', 'fechaV', 'valor']; 
    use HasFactory;
}
