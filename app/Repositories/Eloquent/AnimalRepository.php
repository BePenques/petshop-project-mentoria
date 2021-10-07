<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\AnimalRepositoryInterface;
use App\Models\Animal;

class AnimalRepository extends AbstractRepository implements AnimalRepositoryInterface
{
    protected $model = Animal::class;

    public function petclient($id=null)
    {
        if($id == null){
            return  $this->model->with('cliente')->get();//traz junto o relacionamento com cliente
        }else{
            return  $this->model->with('cliente')->find($id);
        }

    }  
}
