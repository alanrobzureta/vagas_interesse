@extends('layouts.admin_template')

@section('content')
<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Lista de Usuarios</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-default">Total de usuários: {{$usuarios->count()}} usuários</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                      @foreach($usuarios as $usuario)
                            <li>
                                <img src="{{ asset("../bower_components/AdminLTE/dist/img/user1-128x128.jpg") }}" alt="Imagem">
                                <a class="users-list-name" href="#">{{$usuario->name}}</a>
                                <span class="users-list-date">Data de Cadastro: {{$usuario->created_at}}</span>
                                <span class="users-list-date">Última Alteração: {{$usuario->updated_at}}</span>
                            </li>                            
                      @endforeach
                    
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">Visualizar todos os usuários</a>
                </div>
                <!-- /.box-footer -->
              </div>
@endsection
