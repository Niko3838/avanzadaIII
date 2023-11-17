@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Facultades</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registro de Facultades</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/facultades/registrar')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="cod_facultad" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cod_facultad" name="cod_facultad" placeholder="Ingrese el código de la facultad" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom_facultad" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nom_facultad" name="nom_facultad" placeholder="Ingrese el nombre de la facultad" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

