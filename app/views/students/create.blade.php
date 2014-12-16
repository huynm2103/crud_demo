<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('students') }}">Home</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('students') }}">View All Students</a></li>
            <li><a href="{{ URL::to('students/create') }}">Add a student</a>
        </ul>
    </nav>

    <h1>Add Student</h1>

    <!-- Show error message -->
    {{ HTML::ul($errors->all()) }}

    <form method="POST" action="{{ URL::to('nerds') }}">
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