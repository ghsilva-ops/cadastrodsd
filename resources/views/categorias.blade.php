@extends('layout.app',["current" =>"categorias"])


@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>
@if(count($cats) > 0)
        <table clas"table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
@foreach ($cats as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td>
                        <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm-primary">Editar</a>
                        <a href="/categorias/apaga/{{$cat->id}}"r class="btn btn-danger">Apagar</a>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>
@endif
    </div>
    <div class="card-footer">
        <a href="/categorias/novo" class="btn btn-primary" role="button">Nova categoria</a>
</div>


@endsection
