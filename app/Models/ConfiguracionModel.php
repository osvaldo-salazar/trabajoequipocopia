<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracionModel extends Model
{
    /** @use HasFactory<\Database\Factories\configuracion> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $table = 'configuracion';
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
