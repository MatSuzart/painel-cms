@extends('admintle::page')



@section('title', 'Novo Página')

@section('content_header')

<h1>
    Novo Página
<h1>

@endsection('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h4><i class="icon fas fan-ban">Ocorreu um ERRO.</i></h4>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
<div class="card">

    <div class="card-body">
    <form action="{{route('pages.store')}}" method="POST" class="form-horizontal">
        @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Titulo</label>
            </div>
            <div class="col-sm-10">
                <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalide @enderror" />
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Corpo</label>
            </div>
            <div class="col-sm-10">
                <textarea name="body" class="form-control">{{old('body')}}</textarea>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label"></label>
            </div>
            <div class="col-sm-10">
                <input type="submit" value="Criar" class="btn btn-success" />
            </div>

    </form>
    </div>
</div>

</div>
@endsection
