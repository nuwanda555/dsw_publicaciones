<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//usar soft delete
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicacion extends Model
{
    use HasFactory;
    //usar soft delete
    use SoftDeletes;

    public $table="publicaciones";

    //usuario de la publicación
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
