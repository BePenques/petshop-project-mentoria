<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-container mt-2">
                    <span class="custom-session-title text-dark">Dados do Pet</span>
                    <div class="row">
                        <div class="col-12 custom-session-border">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::text('nome', null, $attributes = $errors->has('nome') ? array('id' => 'nome', 'class' => 'form-control is-invalid', 'placeholder' => 'Informe o nome do pet') : array('id' => 'nome', 'class' => 'form-control', 'placeholder' => 'Informe o nome do pet')) !!}
                                            <span>Nome</span>
                                        </label>
                                        {{$errors->first('nome')}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::select('tipo',['0'=>'Cachorro', '1'=>'Gato'],null, array('id' => 'tipo_id', 'class' => 'form-control','placeholder'=>'Selecione o tipo')) !!}
                                            <span>Tipo</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::select('genero',['0'=>'Macho', '1'=>'F??mea'],null, array('id' => 'genero_id', 'class' => 'form-control','placeholder'=>'Selecione o g??nero')) !!}
                                            <span>Genero</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::number('idade', null, array('id' => 'idade', 'class' => 'form-control', 'placeholder' => 'Informe a idade do pet')) !!}
                                            <span>Idade</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::number('peso', null, array('id' => 'peso', 'class' => 'form-control', 'placeholder' => 'Informe o peso do pet')) !!}
                                            <span>Peso</span>
                                        </label>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::text('raca', null,  array('id' => 'nome', 'class' => 'form-control', 'placeholder' => 'Informe a ra??a do pet')) !!}
                                            <span>Ra??a</span>
                                        </label>
                                    </div>
                                </div>                                                                                                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::textarea('obs', null,  array('id' => 'obs', 'class' => 'form-control')) !!}
                                            <span>Observa????es</span>
                                        </label>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::select('cliente_id', $clientes,null, $attributes = $errors->has('cliente_id') ? array('id' => 'cliente_id', 'class' => 'form-control is-invalid', 'placeholder' => 'Selecione o respons??vel') : array('id' => 'cliente_id', 'class' => 'form-control', 'placeholder' => 'Selecione o respons??vel')) !!}
                                            <span>Dono</span>
                                            {{$errors->first('cliente_id')}}
                                        </label>
                                     
                                    </div>
                                </div>                                                            
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="float: right;">@if(!Empty($register->id)) Editar @else Cadastrar @endif  pet</button>      
            </div>   
         </div>
    </div>
</div>