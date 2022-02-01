@extends('admintle::page')


@section('title', 'Painel')

@section('content_header')

@endsection

@section('content')
    <div class="row">
        <div calss="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>999</h3>
                    <p>Visitantes</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                </div>
            </div>
        </div>

        <div calss="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>999</h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-stick-note"></i>
                </div>
            </div>
        </div>

        <div calss="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>999</h3>
                    <p>Usuario</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-user"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Páginas mais visitas</h3>
                </div>
                <div class="card-body">
                    ...
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sobre o Sistema</h3>
                </div>
                <div class="card-body">
                    ...
                </div>
            </div>
        </div>
    </div>
@endsection
