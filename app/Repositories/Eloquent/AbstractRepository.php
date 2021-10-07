<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository {

    protected $model;

    function __construct(){

        $this->model = $this->resolveModel();//injeção da classe na variavel

    }

    protected function resolveModel(){

        return app($this->model);

    }

    public function all()
    {
        return  $this->model->all();
    }

    public function create(array $data):Bool
    {
        return (bool) $this->model->create($data);
    }

    public function find(int $id)
    {
        return $register = $this->model->find($id);
      
    }

    public function update(array $data, int $id):Bool
    {
       
        $register = $this->find($id);
        if( $register){
            return (bool) $register->update($data);
        }else{
            return false;
        }
      
    }

    public function delete(int $id):Bool
    {    
        $register = $this->find($id);
        if( $register){
            return (bool) $register->delete();
        }else{
            return false;
        }
    }

}
