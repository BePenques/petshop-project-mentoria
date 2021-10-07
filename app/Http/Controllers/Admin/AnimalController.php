<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Contracts\AnimalRepositoryInterface;
use App\Repositories\Contracts\ClienteRepositoryInterface;
use App\Models\Animal;

class AnimalController extends Controller
{
    private $model;

    public function __construct(AnimalRepositoryInterface $model, ClienteRepositoryInterface $modelclient){

        $this->model = $model;
        $this->modelclient = $modelclient;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->model->petclient();//trazer todos os pets e seus donos, ou 1 especifico
        
        $title = "Lista de Pets";
        return view('admin.animais.index', compact('list','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = $this->modelclient->allclients();//trazer todos os clientes
        $title = "Cadastrar Pet";
        return  view('admin.animais.create',compact('title','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
      
        $validator = Validator::make($request->all(), [
            'nome' 	       => 'required|string|min:2|max:20',
            'cliente_id'   => 'required',
			
		],[
			'required' 		  => 'O campo: :attribute é obrigatório.',
			'cliente_id.required' 		  => 'O campo responsável é obrigatório.',
		]);
		if ($validator->fails()) {			
            return redirect()->back()->withInput($request->all())->withErrors($validator);
		}

        if($this->model->create($data)){        
            session()->flash('msg','Pet criado!');
            session()->flash('status','sucess');
            return redirect()->route('pets.index');
        }else{
            session()->flash('msg','Erro ao cadastrar pet');
            session()->flash('status','error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $title = "Detalhes do Pet";
        $register = $this->model->find($id);

        if(Empty($register)){
            return redirect()->back();
        }

        $list = $this->model->petclient($id);

        $delete = false;
        if($request->delete){
            $delete = true;
        }

        return  view('admin.animais.show',compact('title','register','delete','list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Atualizar Pet";
        $register = $this->model->find($id);
        
        if(Empty($register)){
            return redirect()->back();
        }

        $clientes = $this->modelclient->allclients();//trazer todos os clientes

        return  view('admin.animais.edit',compact('title','register','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
      
        $validator = Validator::make($request->all(), [
            'nome' 	       => 'required|string|min:2|max:20',
            'cliente_id'   => 'required',
			
		],[
			'required' 		  => 'O campo: :attribute é obrigatório.',
			'cliente_id.required' 		  => 'O campo responsável é obrigatório.',
		]);
		if ($validator->fails()) {			
            return redirect()->back()->withInput($request->all())->withErrors($validator);
		}

        if($this->model->update($data,$id)){        
            session()->flash('msg','Pet atualizado!');
            session()->flash('status','sucess');
            return redirect()->route('pets.index');
        }else{
            session()->flash('msg','Erro ao atualizar pet');
            session()->flash('status','error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->model->delete($id)){    
            session()->flash('msg','Pet excluido com sucesso!');
            session()->flash('status','sucess');
            return redirect()->route('pets.index');
        }else{
            session()->flash('msg','Erro ao excluir pet');
            session()->flash('status','error');
            return redirect()->back();
        }
    }
}
