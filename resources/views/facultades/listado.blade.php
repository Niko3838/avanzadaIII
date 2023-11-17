@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Facultades</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title text-center mb-0">Tabla de Facultades</h3>
                    <a href="{{route('form_registro_facultad')}}" class="btn btn-success ml-auto"><i class="fas fa-plus"></i> Registrar</a>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faculty as $index => $f)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $f->codfacultad }}</td>
                                    <td>{{ $f->nomfacultad }}</td>
                                    <td>
                                        <button href="#" class="btn btn-primary"><i class="fas fa-edit"></i> </button>
                                        <button href="{{route ('eliminar_facultad',$f->codfacultad)}}" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
