<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'cuentas';
    protected $primaryKey = 'cuenta_id';
    public $timestamps = false;

    
}
