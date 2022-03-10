@extends('layouts.app')

@section('template_title')
    {{ $coursesandteacher->name ?? 'Show Coursesandteacher' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Coursesandteacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('coursesandteachers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $coursesandteacher->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $coursesandteacher->LastName }}
                        </div>
                        <div class="form-group">
                            <strong>Dateofbirth:</strong>
                            {{ $coursesandteacher->DateOfBirth }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $coursesandteacher->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Cel:</strong>
                            {{ $coursesandteacher->Cel }}
                        </div>
                        <div class="form-group">
                            <strong>Course:</strong>
                            {{ $coursesandteacher->Course }}
                        </div>
                        <div class="form-group">
                            <strong>Schedule:</strong>
                            {{ $coursesandteacher->Schedule }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
