<!-- app/views/students/show.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Students</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">

        @include('students.navigation');

        <h1>Showing {{ $student->name }}</h1>

        <div class="jumbotron text-center">
            <h2>{{ $student->name }}</h2>
            <p>
                <strong>Email:</strong> {{ $student->email }}<br>
                <strong>Birth Day:</strong> {{ $student->birth_day }}<br>
                <strong>Sex:</strong> {{ $student->sex }}
            </p>
        </div>

    </div>
    </body>
</html>