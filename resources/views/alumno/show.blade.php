@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Profesor Id:</strong>
                            {{ $alumno->profesor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Firstname:</strong>
                            {{ $alumno->FirstName }}
                        </div>
                        <div class="form-group">
                            <strong>Secondname:</strong>
                            {{ $alumno->SecondName }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $alumno->LastName }}
                        </div>
                        <div class="form-group">
                            <strong>Dateofbirth:</strong>
                            {{ $alumno->DateOfBirth }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $alumno->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $alumno->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Dpi:</strong>
                            {{ $alumno->Dpi }}
                        </div>
                        <div class="form-group">
                            <strong>Cel:</strong>
                            {{ $alumno->Cel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
