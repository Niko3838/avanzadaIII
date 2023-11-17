@extends('adminlte::page')

@section('title', 'Programas')

@section('content_header')
    <h1>Registrar Programas</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registro de Programas</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{url('/programas/registrar')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="cod_program" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cod_program" name="cod_program" placeholder="Ingrese el código del Programa" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom_program" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nom_program" name="nom_program" placeholder="Ingrese el nombre del Programa" required>
                            </div>
                        </div>

                        <div class="form-group row">
    <label for="fk_facultad" class="col-sm-2 col-form-label">Facultad</label>
    <div class="col-sm-10">
        <select class="form-control" name="fk_facultad" id="fk_facultad">
            @foreach ($faculty as $listFacultad)
                <option value="{{ $listFacultad->codfacultad }}" {{ old('fk_facultad') == $listFacultad->codfacultad ? 'selected' : '' }}>
                    {{ $listFacultad->nomfacultad }}
                </option>
            @endforeach
        </select>
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