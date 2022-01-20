@extends('admintle::page')



@section('title', 'Usuários')

@section('content_header')

<h1>
    Novo Usuário
<h1>

@endsection('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h4>Ocorreu um ERRO.</h4>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('users.store')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="row">
            <div class="form-group">
                <label class="col-sm-2 control-label">Nome Completo</label>
            </div>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="col-sm-2 control-label">E-mail</label>
            </div>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="col-sm-2 control-label">Senha</label>
            </div>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="col-sm-2 control-label">Confirmação da Senha</label>
            </div>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
            </div>
            <div class="col-sm-10">
                <input type="submit" value="cadastrar" class="btn btn-success" />
            </div>
        </div>
    </form>
</div>
@endsection
