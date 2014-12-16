<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('students') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('students') }}">View All Students</a></li>
        <li><a href="{{ URL::to('students/create') }}">Add a student</a>
    </ul>
</nav>