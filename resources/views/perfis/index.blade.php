@extends('layouts.admin_template')

@section('content')
CADASTRO DE PERFIS DE USUÁRIO
<p class="text-right">
    <a href="{{url('/perfis/create')}}" class="btn btn-default navbar-btn"><i class="fa fa-edit"></i>Cadastrar</a>
</p>


<table id="tbl_perfis" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="text-left">Nome</th>            
            <th class="text-center">Operações</th>                
        </tr>
    </thead>
    <tbody> 
        @foreach($perfis as $perfil)
            <tr>
                <td class="text-left">{{$perfil->nome}}</td>                    
                <td class="text-center">
                    <a href="{{url('/perfis/'.$perfil->id_perfil)}}"><i class="fa fa-eye"></i></a>
                    <a href="{{url('/perfis/'.$perfil->id_perfil.'/edit')}}"><i class="fa fa-pencil"></i></a>
                    {!! Form::open(['url' => URL::to("perfis/$perfil->id_perfil"),'accept-charset'=>'UTF-8','class'=>'formDelete']) !!}
                    {!! method_field('DELETE') !!}
                    {!! Form::token() !!}
                    <button type="submit" id='destroy' class="btn btn-link fa fa-remove" data-confirm="Deseja realmente excluir este item?" alt="Excluir" title="Excluir"></button>
                    {!! Form::close() !!}
                    
                </td>                                        
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
@section('script')
<script>
$(document).ready(function() {
    $(".formDelete").on("submit", function(){
        return confirm("Deseja realmente excluir este item?");
    }); 
        
    var table = $('#tbl_perfis').DataTable({
        "language": {
            "lengthMenu": "Mostrar  _MENU_  registros por página",
            "zeroRecords": "Nenhum registro encontrado",
            "info": "Mostrando _PAGE_ de _PAGES_ registros de um total de _MAX_",
            "infoEmpty": "Nenhum registro encontrado",
            "infoFiltered": "(filtrado de _MAX_ registros totais)",
            "search":"Pesquisar: "
        }
    });
    
    table.draw();
});
</script>
@endsection