<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';
    protected $primaryKey = 'idNoticia';
    protected $fillable = [
        'titulo',
        'autor',
        'fecha',
        'imagen',
        'descripcion_corta',
        'descripcion_larga',
        'destacado',
        'activo'
    ];

    protected $casts = [
        'fecha' => 'date', // 👈 Esto convierte automáticamente a Carbon
    ];
}
