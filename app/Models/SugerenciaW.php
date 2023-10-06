<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class SugerenciaW extends Model
{
    use HasFactory;

    protected $table = 'sugerencias_w';
    protected $primaryKey = 'sugerenciaW_id';
    public $timestamps = false;

    public function cuenta():BelongsTo
    {
        return $this->belongsTo(Cuenta::class);
    }
}
