@extends('voyager::master')

@section('page_title', 'Exportar datos')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-data"></i> Exportación de Datos
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        {!! Form::open(['route' => 'voyager.exports.download', 'method' => 'POST']) !!}
                        <div class="row">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group col-md-2">
                                {!!
                                    Form::select('exportable',[
                                        'User' => 'Usuarios',
                                        'Medico' => 'Medicos',
                                        'Paciente' => 'Pacientes',
                                        'Empresa' => 'Empresas',
                                        'Asistencia' => 'Asistencias',
                                        'Formato' => 'Formatos',
                                        'Sede' => 'Sedes'

                                    ], null, ['class' => 'form-control', 'style' => 'margin-top: 5px']);
                                !!}
                            </div>
                            <div class="form-group col-md-2">
                                {!! Form::submit('Exportar datos', ['class' => 'btn btn-primary btn-block btn-md pull-right']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')

@stop

@section('javascript')

@stop