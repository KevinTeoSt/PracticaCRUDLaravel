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



<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Profesor Name</th>
        <th scope="col">Schedule</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Date Of Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">DPI</th>
        <th scope="col">Phone</th>

    </tr>
    </thead>

    <tbody>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->coursesandteacher->Name }}</td>
            <td>{{ $alumno->coursesandteacher->Course }}</td>
            <td>{{ $alumno->coursesandteacher->Schedule }}</td>
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

</body>
</html>
