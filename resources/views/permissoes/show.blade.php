@extends('layouts.admin_template')

@section('content')
<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Permissão para: {{ $permissao->nome }}</h3>

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
                            <a class="users-list-name" href="#">{{$permissao->nome}}</a>
                            <span class="users-list-date">Data de Cadastro: {{$permissao->created_at}}</span>
                            <span class="users-list-date">Última Alteração: {{$permissao->updated_at}}</span>
                        </li>                            
                    </ul>
                    <ul class="users-list clearfix">
                        <li>
                            Perfis que possue(m) essa permissão
                            @if($permissao->perfil)
                                @foreach($permissao->perfil as $perfil)
                                    <span class="users-list-date">{{ $perfil->nome }}</span>
                                @endforeach                    
                            @endif                        
                        </li>                            
                    </ul>                      
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{url('/permissoes/')}}" class="btn btn-default">Voltar</a>
                </div>
                <!-- /.box-footer -->
              </div>
@endsection
