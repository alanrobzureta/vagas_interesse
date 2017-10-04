@extends('layouts.admin_template')

@section('content')
<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Dados de {{ $user->name }}</h3>

                  <div class="box-tools pull-right">                    
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <li>
                            <img src="{{ asset("../bower_components/AdminLTE/dist/img/user1-128x128.jpg") }}" alt="Imagem">
                            <a class="users-list-name" href="#">{{$user->name}}</a>
                            <span class="users-list-date">CPF: {{$user->cpf}}</span>
                            <span class="users-list-date">email: {{$user->email}}</span>
                            <span class="users-list-date">Data de Cadastro: {{$user->created_at}}</span>
                            <span class="users-list-date">Última Alteração: {{$user->updated_at}}</span>
                        </li>                            
                    </ul>
                    <ul class="users-list clearfix">
                        <li>
                            Perfis deste usuário
                            @if($user->perfil)
                                @foreach($user->perfil as $perfil)
                                    <p>{{ $perfil->nome }}</p>                                    
                                    @if($perfil->permissao)
                                        @foreach($perfil->permissao as $permissao)
                                            <span class="users-list-date">{{ $permissao->nome }}</span>                                            
                                        @endforeach
                                    @endif
                                    <hr>
                                @endforeach                    
                            @endif                        
                        </li>                            
                    </ul> 
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{url('/users/')}}" class="btn btn-default">Voltar</a>
                </div>
                <!-- /.box-footer -->
              </div>
@endsection
