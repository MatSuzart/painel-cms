@extends('admintle::page')

@section('plugins.Chartjs', true);


@section('title', 'Painel')

@section('content_header')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Dashboard</h1>
        </div>
        <div class="col-md-6">
            <form action="" method="get">
            <select onChange="this.form.submit()" name="inteval" id="" class="float-md-right">
                <option {{$dateInterval==30?'selected="selected"' :''}} value="30">30</option>
                <option {{$dateInterval==60?'selected="selected"' :''}} value="60">60</option>
                <option {{$dateInterval==120?'selected="selected"' :''}} value="120">6 meses</option>
            </select>
        </div>
        </form>
    </div>

    <div class="row">
        <div calss="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$visitsCount}}</h3>
                    <p>Acessos</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                </div>
            </div>
        </div>

        <div calss="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$onlineCount}}</h3>
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
                    <h3>{{$userCount}}</h3>
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
                    <canvas id="pagePie"></canvas>
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

<script>
    window.onload = function(){
        let ctx = document.getElementById('pagePie').getContext('2d');
        window.pagePie = new Chart(ctx, {
            type:'pie',
            data:{
                datasets:[{
                    data:{{$pageValues}}
                    backgroundColor:'#00000FF'
                }],
                labels:{!! $pagesLabels !!}
            },
            options:{
                responsive:true,
                legend:{
                    display:false
                }
            }
        });
    }
</script>

@endsection
