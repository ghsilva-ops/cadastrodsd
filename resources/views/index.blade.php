@extends('layout.app')

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-tittle">Cadastro de produto</h5>
                        <p class="card-text">
                        Aqui você cadastra todos os seus produtos
                        Só não de esqueça de cadastrar previamente as categorias
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-tittle">Cadastro de Departamentos</h5>
                        <p class="card-text">
                        Cadastre as categorias dos seus produtos
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>



@endsection
