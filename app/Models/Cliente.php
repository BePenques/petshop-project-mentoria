<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id';
   
    protected $fillable = [
        'id',
        'nomecompleto',
        'aniversario',
        'cpf', 
        'rg',
        'fone',
        'celular',
        'email',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'CEP'     
    ]; 

    public function pets()
    {
        return $this->hasMany('App\Models\Animal');
    }


}
