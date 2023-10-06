<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class SugerenciaD extends Model
{
    use HasFactory;

    protected $table = 'sugerencias_d';
    protected $primaryKey = 'sugerenciaD_id';
    public $timestamps = false;

    public function cuenta():BelongsTo
    {
        return $this->belongsTo(Cuenta::class);
    }

    public function tipoD():BelongsTo
    {
        return $this->belongsTo(TipoD::class);
    }

}
