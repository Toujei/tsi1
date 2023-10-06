<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dieta extends Model
{
    use HasFactory;
    
    protected $table = 'dietas';
    protected $primaryKey = 'dieta_id';
    public $timestamps = false;

    public function tipoD():BelongsTo
    {
        return $this->belongsTo(TipoD::class, 'tipo_id');
    }   
    


}
