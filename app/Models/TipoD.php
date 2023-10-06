<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class TipoD extends Model
{
    use HasFactory;

    protected $table = 'tipos_d';
    protected $primaryKey = 'tipo_id';
    public $timestamps = false;

    public function dietas():HasMany
    {
        return $this->hasMany(Dieta::class);
    }

    public function sugerenciaD():HasMany
    {
        return $this->hasMany(SugerenciaD::class);
    }

}
