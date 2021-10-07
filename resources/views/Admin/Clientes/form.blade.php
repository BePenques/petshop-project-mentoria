<div class="row">
    <div class="col-lg-8 col-xl-9">
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-container mt-2">
                    <span class="custom-session-title text-dark">Dados do cliente</span>
                    <div class="row">
                        <div class="col-12 custom-session-border">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::text('nomecompleto', null, $attributes = $errors->has('nomecompleto') ? array('id' => 'nomeCompleto', 'class' => 'form-control is-invalid', 'placeholder' => 'Informe o nome completo') : array('id' => 'nomeCompleto', 'class' => 'form-control', 'placeholder' => 'Informe o nome completo')) !!}
                                            <span>Nome Completo</span>
                                        </label>
                                        {{$errors->first('nomecompleto')}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::text('cpf', null, $attributes = $errors->has('cpf') ? array('id' => 'cpf', 'class' => 'form-control is-invalid', 'placeholder' => 'Informe o cpf') : array('id' => 'cpf', 'class' => 'form-control', 'placeholder' => 'Informe o cpf')) !!} 
                                            <span>CPF</span>
                                        </label>
                                        {{$errors->first('cpf')}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::text('rg', null, array('id' => 'rg', 'class' => 'form-control', 'placeholder' => 'XX.XXX.XXX-X')) !!}
                                            <span>RG</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="has-float-label">
                                            {!! Form::text('aniversario', (!Empty($register->aniversario)?date('d/m/Y',strtotime($register->aniversario)):null), ['class' => 'form-control kt_datepicker_4_1','id'=>'aniversario', 'placeholder' => 'dd/mm/aaaa']) !!}
                                            <span>Data Nascimento</span><!-- aniversário -->
                                            <div class="calendarClass">
                                                <div>
                                                    <i class="la la-calendar"></i>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>                                                          
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 custom-session-border">
                            <span class="custom-session-title text-dark">Contato</span>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="celular" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <div class="kt-input-icon pull-right">
                                                {!! Form::email('email', null, array('id' => 'Email','placeholder' => 'email@exemplo.com','class' => 'form-control')) !!}
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                                    <span>
                                                        <i class="flaticon-mail-1"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="celular" class="col-md-2 col-form-label">Telefone</label>
                                        <div class="col-md-10">
                                            <div class="kt-input-icon pull-right">
                                                {!! Form::text('fone', null, array('id' => 'fone', 'class' => 'form-control', 'placeholder' => 'Por favor, preencha com o número de telefone')) !!}
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                                    <span>
                                                        <i class="socicon-viber"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="celular" class="col-md-2 col-form-label">Celular</label>
                                        <div class="col-md-10">
                                            <div class="kt-input-icon pull-right">
                                                {!! Form::text('celular', null, $attributes = $errors->has('celular') ? array('id' => 'celular', 'class' => 'form-control is-invalid', 'placeholder' => 'Por favor, preencha com o número de celular') : array('id' => 'celular', 'class' => 'form-control', 'placeholder' => 'Por favor, preencha com o número de celular')) !!}
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                                    <span>
                                                        <i class="la la-mobile-phone"></i>
                                                    </span>
                                                    {{$errors->first('celular')}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 custom-session-border">
                            <span class="custom-session-title text-dark">Localização</span>
                            <div class="row">
                                <div class="col-12 container-fluid"> <!-- style="border: 1px solid #5d78ff; border-radius: 4px;" -->
                                    <div class="row"> <!-- mt-4 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="has-float-label">
                                                    {!! Form::text('CEP', null, array('id' => 'CEP', 'class' => 'form-control', 'placeholder' => 'CEP')) !!}
                                                    <span>CEP</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="has-float-label">
                                                    {!! Form::text('cidade', null, array('id' => 'Cidade','class' => 'form-control', 'placeholder' => 'Inserir cidade')) !!}
                                                    <span>Cidade</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="has-float-label">
                                                    {!! Form::text('endereco', null, array('id' => 'Endereco','class' => 'form-control', 'placeholder' => 'Inserir endereço')) !!}
                                                    <span>Endereço</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="has-float-label">
                                                    {!! Form::text('numero', null, array('id' => 'Numero','class' => 'form-control', 'placeholder' => 'nº')) !!}
                                                    <span>Número</span>
                                                </label>
                                            </div>
                                        </div>  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="has-float-label">
                                                    {!! Form::text('bairro', null, array('id' => 'Bairro','class' => 'form-control','id'=>'Bairro', 'placeholder' => 'Bairro')) !!}
                                                    <span>Bairro</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="has-float-label">
                                                    {!! Form::text('estado', null, array('class' => 'form-control','id'=>'Estado', 'placeholder' => 'UF')) !!}
                                                    <span>Estado</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="has-float-label">
                                                    {!! Form::text('complemento', null, array('id' => 'Complemento','class' => 'form-control', 'placeholder' => 'Inserir complemento')) !!}
                                                    <span>Complemento (Opcional)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="float: right;">@if(!Empty($register->id)) Editar @else Cadastrar @endif  cliente</button>      
            </div>   
         </div>
    </div>
</div>