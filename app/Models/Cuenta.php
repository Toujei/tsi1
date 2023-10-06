<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Cuenta extends Authenticatable
{
    use HasFactory;

    protected $table = 'cuentas';
    protected $primaryKey = 'user';
    public $timestamps = false;

    public function sugerenciasW():HasMany
    {
        return $this->hasMany(SugerenciasW::class);
    }

    public function sugerenciasD():HasMany
    {
        return $this->hasMany(SugerenciaD::class);
    }



}
