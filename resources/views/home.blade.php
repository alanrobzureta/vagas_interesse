@extends('layouts.admin_template')

@section('content')
<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Lista de Processos</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-default">Total de processos: {{$processos->count()}} processos</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                      @foreach($processos as $processo)
                            @if($processo->fk_status == 1)
                                <li>
                                    <img src="{{ asset("../bower_components/AdminLTE/dist/img/logo_adonai_mini.jpg") }}" alt="Imagem">
                                    <a class="users-list-name" href="#">Processo {{$processo->id_processo}}</a>
                                    <span class="users-list-date">Data Inicial: {{$processo->data_inicial}}</span>
                                    <span class="users-list-date">Data Final: {{$processo->data_final}}</span>
                                </li>
                            @endif
                      @endforeach
                    
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">Visualizar todos os processos</a>
                </div>
                <!-- /.box-footer -->
              </div>
@endsection
