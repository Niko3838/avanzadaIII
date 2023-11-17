@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title text-center mb-0">Tabla de Programas</h3>
                    <a href="{{route('form_registro_programa')}}" class="btn btn-success ml-auto"><i class="fas fa-plus"></i> Registrar</a>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Facultad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($program as $index => $p)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $p->codprograma }}</td>
                                    <td>{{ $p->nomprograma }}</td>
                                    <td>{{ $p->nomfacultad}}</td>
                                    <td>
                                        <button href="#" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                        <button href="#" class="btn btn-danger"><i class="fas fa-trash"></i></button>
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
    <script> console.log('Hi!'); </script>
@stop