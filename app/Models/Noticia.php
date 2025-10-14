<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';
    protected $primaryKey = 'idNoticia';
    protected $fillable = [
        'titulo',
        'autor',
        'fecha',
        'categoria',
        'imagen',
        'descripcion_corta',
        'descripcion_larga',
    ];
}
