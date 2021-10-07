<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Contracts\ClienteRepositoryInterface;

class ClienteController extends Controller
{
    private $model;

    public function __construct(ClienteRepositoryInterface $model){

        $this->model = $model;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->model->all();
        
        $title = "Lista de Clientes";
        return view('admin.clientes.index', compact('list','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar Cliente";
        return  view('admin.clientes.create',compact('title'));
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
            'nomecompleto' 	  => 'required|string|min:2|max:191',
            'cpf' 		      => 'required|string|min:11|max:14',
			'celular' 		  => 'required|string|min:2|max:18',
			'email' 	      => 'nullable|string|min:5|max:180'
		],[
			'required' 		  => 'O campo: :attribute é obrigatório.',
		]);
		if ($validator->fails()) {			
            return redirect()->back()->withInput($request->all())->withErrors($validator);
		}

        if(!Empty($data['aniversario'])){
            $data['aniversario'] = date("Y-m-d", strtotime(str_replace('/','-',$data['aniversario'])));
        }

        if($this->model->create($data)){        
            session()->flash('msg','Cliente criado!');
            session()->flash('status','sucess');
            return redirect()->route('clientes.index');
        }else{
            session()->flash('msg','Erro ao cadastrar cliente');
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
        $title = "Detalhes do Cliente";
        $register = $this->model->find($id);

        if(Empty($register)){
            return redirect()->back();
        }

        $delete = false;
        if($request->delete){
            $delete = true;
        }

        return  view('admin.clientes.show',compact('title','register','delete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Atualizar Cliente";
        $register = $this->model->find($id);

        if(Empty($register)){
            return redirect()->back();
        }

        return  view('admin.clientes.edit',compact('title','register'));
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
            'nomecompleto' 	  => 'required|string|min:2|max:191',
            'cpf' 		      => 'required|string|min:11|max:14',
			'celular' 		  => 'required|string|min:2|max:18',
			'email' 	      => 'nullable|string|min:5|max:180'
		],[
			'required' 		  => 'O campo: :attribute é obrigatório.',
		]);
		if ($validator->fails()) {			
            return redirect()->back()->withInput($request->all())->withErrors($validator);
		}

        if(!Empty($data['aniversario'])){
            $data['aniversario'] = date("Y-m-d", strtotime(str_replace('/','-',$data['aniversario'])));
        }

        if($this->model->update($data, $id)){        
            session()->flash('msg','Cliente atualizado!');
            session()->flash('status','sucess');
            return redirect()->route('clientes.index');
        }else{
            session()->flash('msg','Erro ao atualizar cliente');
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
            session()->flash('msg','Cliente excluido com sucesso!');
            session()->flash('status','sucess');
            return redirect()->route('clientes.index');
        }else{
            session()->flash('msg','Erro ao excluir cliente');
            session()->flash('status','error');
            return redirect()->back();
        }
       
    }
}
