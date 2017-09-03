@extends('layouts.admin_template')

@section('content')
<table id="tbl_users" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Operações</th>                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th> - - - </th>
                <th> - - -</th>
                <th> - - -</th>
                <th></th>                
            </tr>
        </tfoot>
        <tbody> 
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>                    
                    <td>{{$user->cpf}}</td>                    
                    <td>{{$user->email}}</td>                    
                    <td>
                        <a href="{{url('/users/'.$user->id)}}"><i class="fa fa-eye"></i></a>
                        <a href="{{url('/users/')}}"><i class="fa fa-pencil"></i></a>
                        <a href="{{url('/users/')}}"><i class="fa fa-remove"></i></a>
                    </td>                                        
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('script')
<script>
$(document).ready(function() {
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