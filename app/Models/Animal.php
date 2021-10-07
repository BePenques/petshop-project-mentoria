<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'cliente_id',
        'nome',
        'tipo', 
        'idade',
        'peso',
        'genero',
        'raca',
        'obs'  
    ]; 

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','cliente_id');
    }

}
