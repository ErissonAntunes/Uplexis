@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Artigos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Digite o tutulo do Artigo" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Capturar</button>
                     <a href="/artigos" class="imput-group-button">
                        <button type="button" class="btn btn-outline-secondary">Exibir</button></a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
