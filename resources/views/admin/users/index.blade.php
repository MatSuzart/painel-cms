@extends('admintle::page')



@section('title', 'Usuários')

@section('content_header')

<h1>
    Meus Usuários
    <a href="{{route('users.create')}}" class="btn btn-sm btn-success">Novo Usuário</a>
<h1>

@endsection('content')
    <div class="card">

        <div class="card-body">
                    <table class="table table-hover">
    <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>AÇÕES</th>
            </tr>
    </thead>
    <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>

                <td>
                    <a href="{{'route(users.edit',['user' =>$user->id])}}" class="btn btn-sm btn-info">Editar</a>
                    @if($loggedId !== intval($user->id))
                    <form class="d-inline" action="{{route('users.destroy',['users'=> $users->id])}}" method="post" onSubmit="return confirm('QUER MESMO EXCLUIR ?')">
                        @method('DELETE')
                        @csrf
                           <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
    </tbody>
            </table>

        </div>

    </div>

    {{$users->links()   }}

@endsection
