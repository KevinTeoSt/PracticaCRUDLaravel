<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</head>
<body>

<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">Laravel Practice No.1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav justify-content-end collapse navbar-collapse me-auto my-2 my-lg-0 navbar-nav-scroll"
                    id="navbarScroll">
                    <li class="nav-item">

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link active" :href="route('logout')"
                               onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@extends('layouts.app')

@section('template_title')
    Coursesandteacher
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Coursesandteacher') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('coursesandteachers.create') }}"
                                   class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                            <a href="{{url('home')}}" class="btn btn-warning"> Regresar</a>
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

                                    <th>Name</th>
                                    <th>Lastname</th>
                                    <th>Dateofbirth</th>
                                    <th>Email</th>
                                    <th>Cel</th>
                                    <th>Course</th>
                                    <th>Schedule</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($coursesandteachers as $coursesandteacher)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $coursesandteacher->Name }}</td>
                                        <td>{{ $coursesandteacher->LastName }}</td>
                                        <td>{{ $coursesandteacher->DateOfBirth }}</td>
                                        <td>{{ $coursesandteacher->Email }}</td>
                                        <td>{{ $coursesandteacher->Cel }}</td>
                                        <td>{{ $coursesandteacher->Course }}</td>
                                        <td>{{ $coursesandteacher->Schedule }}</td>

                                        <td>
                                            <form action="{{ route('coursesandteachers.destroy',$coursesandteacher->id) }}"
                                                method="POST">

                                                <a class="btn btn-sm btn-success"
                                                   href="{{ route('coursesandteachers.edit',$coursesandteacher->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i> Edit</a>



                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-fw fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $coursesandteachers->links() !!}
            </div>
        </div>
    </div>
@endsection
</body>
</html>
