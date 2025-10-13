<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    use HasFactory;

    protected $table = 'configuraciones';
    protected $primaryKey = 'idConfiguracion';
    
    protected $fillable = [
        'hero_home',
        'section_matricula', 
        'section_semana_u',
        'hero_quienes_somos',
        'hero_noticias',
        'logo_home'
    ];

    protected $casts = [
        'section_matricula' => 'boolean',
        'section_semana_u' => 'boolean',
    ];
}