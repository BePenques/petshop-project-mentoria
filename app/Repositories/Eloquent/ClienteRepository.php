<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ClienteRepositoryInterface;
use App\Models\Cliente;

class ClienteRepository extends AbstractRepository implements ClienteRepositoryInterface
{
    protected $model = Cliente::class;

    public function allclients()
    {
        // $centrocusto = CentroCusto::where(['codl'=>$userA->codl])->pluck('descricao','id')->all();	
        
        return  $this->model->pluck('nomecompleto','id')->all();

    }
    
}
