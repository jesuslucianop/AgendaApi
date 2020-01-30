<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $table = "contactos";
    protected $primaryKey = 'id';
    protected $fillable = ['Nombre','Apellido', 
    'Telefeno','Correo'];
}
