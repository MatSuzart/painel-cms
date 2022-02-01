@extends('admintle::page')



@section('title', 'Editar Paginas')

@section('content_header')

<h1>
    Editar Paginas
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
    <form action="{{route('pages.update', ['pages'=>$page->id])}}" method="POST" class="form-horizontal">
        @method('PUT')
        @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Titulo</label>
            </div>
            <div class="col-sm-10">
                <input type="text" name="title" value="{{'$page->title'}}" class="form-control @error('title') is-invalide @enderror" />
            </div>


            <div class="form-group">
                <label class="col-sm-2 col-form-label">Corpo</label>
            </div>
            <div class="col-sm-10">
                    <textarea name="body" class="form-control bodyfield">{{$page->title}}</textarea>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-form-label"></label>
            </div>
            <div class="col-sm-10">
                <input type="submit" value="cadastrar" class="btn btn-success" />
            </div>

    </form>
    </div>
</div>

</div>



<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce.min.js"></script>
<script>


tinymce.init({
    selector:'textarea.bodyfield',
    heigth:300,
    menurbar:false,
    plugins:['link', 'table','iamge','autosize','lists'],
    toolbar:'undo redo | formatselect | bold italic backcolor | alinleft aligncenter alignright alignjustify | table | link image | bullist numlist',
    content_css:[
        '{{asset('assets/css/content.css')}}'
    ],
    images_upload_url:'{{route('imageupload')}}',
    images_upload_credentials:true,
    convert_urls:false

});

</script>

@endsection
