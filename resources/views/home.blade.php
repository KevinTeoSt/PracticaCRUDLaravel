<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

</head>
<body>

<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Laravel Practice No.1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav justify-content-end collapse navbar-collapse me-auto my-2 my-lg-0 navbar-nav-scroll" id="navbarScroll">
                    <li class="nav-item">

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link active" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<center>


    <div class="card mt-5"  >
        <div class="card-body">
            <a class="btn btn-success" href="{{url('alumnos')}}">Register new student</a>
            <a class="btn btn-warning" href="{{url('coursesandteachers')}}">Registrar Courses and Teachers</a>
        </div>
    </div>

</center>

@extends('layouts.app')

@section('template_title')
@section('template_title')
    Alumno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alumno') }}
                            </span>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Profesor Name</th>
                                    <th>Firstname</th>
                                    <th>Secondname</th>
                                    <th>Lastname</th>
                                    <th>Dateofbirth</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Dpi</th>
                                    <th>Cel</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $alumno->coursesandteacher->Name }}</td>
                                        <td>{{ $alumno->FirstName }}</td>
                                        <td>{{ $alumno->SecondName }}</td>
                                        <td>{{ $alumno->LastName }}</td>
                                        <td>{{ $alumno->DateOfBirth }}</td>
                                        <td>{{ $alumno->Address }}</td>
                                        <td>{{ $alumno->Email }}</td>
                                        <td>{{ $alumno->Dpi }}</td>
                                        <td>{{ $alumno->Cel }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $alumnos->links() !!}
            </div>
        </div>
    </div>
@endsection
</body>
</html>

