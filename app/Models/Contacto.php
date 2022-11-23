<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contacto extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $table = 'contactos';
    protected $connection = 'mysql';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'mail',
        'telefono',
        'mensaje',
        'mail_enviado'
    ];
}
