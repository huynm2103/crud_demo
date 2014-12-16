<!-- app/views/students/create.blade.php -->

<!--    @include('students.header')-->
<!DOCTYPE html>
<html>
    <head>
        <title>Students</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            @include('students.navigation')

            <h1>Add Student</h1>

            <!-- Show error message -->
            {{ HTML::ul($errors->all()) }}

            <form method="POST" action="{{ URL::to('students') }}">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" type="text" />
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" type="email" />
                </div>

                <div class="form-group">
                    <label>Birth Day</label>
                    <input class="form-control" name="birth_day" type="date" />
                </div>

                <div class="form-group">
                    <label>Sex</label>
                    <select class="form-control" id="sex" name="sex">
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                </div>

                <input type="submit" class="btn btn-primary" value="Add this Student!" />

            </form>

        </div>
    </body>
</html>