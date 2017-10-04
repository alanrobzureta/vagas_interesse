@extends('layouts.admin_template')

@section('content')

<p class="text-right">
    <a href="{{url('/users/create')}}" class="btn btn-default navbar-btn"><i class="fa fa-edit"></i>Cadastrar</a>
</p>


<table id="tbl_users" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="text-left">Nome</th>
            <th class="text-left">CPF</th>
            <th class="text-left">Email</th>
            <th class="text-center">Operações</th>                
        </tr>
    </thead>
    <tbody> 
        @foreach($users as $user)            
                <tr>
                    <td class="text-left">{{$user->name}}</td>                    
                    <td class="text-left">{{$user->cpf}}</td>                    
                    <td class="text-left">{{$user->email}}</td>                    
                    <td class="text-center">
                        @can('ver_usuario',$user)
                            <a href="{{url('/users/'.$user->id)}}"><i class="fa fa-eye"></i></a>
                        @endcan
                        @can('editar_usuario',$user)
                            <a href="{{url('/users/'.$user->id.'/edit')}}"><i class="fa fa-pencil"></i></a>
                        @endcan
                        @can('remover_usuario',$user)
                            {!! Form::open(['url' => URL::to("users/$user->id"),'accept-charset'=>'UTF-8','class'=>'formDelete']) !!}
                            {!! method_field('DELETE') !!}
                            {!! Form::token() !!}
                            <button type="submit" id='destroy' class="btn btn-link fa fa-remove" data-confirm="Deseja realmente excluir este item?" alt="Excluir" title="Excluir"></button>
                            {!! Form::close() !!}
                        @endcan
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
        
    var table = $('#tbl_users').DataTable({
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