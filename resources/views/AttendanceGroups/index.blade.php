<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AttendanceGroup</title>
</head>

<body>
    <div class="container">
        <h1>Index</h1>
        @if (count($attendancegroup) == 0)
        <p>There is no attendancegroup</p>
        @endif


        <a class="btn btn-primary" href="{{route('attendancegroup.create')}}">Create new group</a>
        <table class="table table-striped">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Difficulty</th>
                <th>School name</th>
                <th>Actions</th>
            </tr>

            @foreach ($attendancegroups as $attendancegroup)
            <tr>
                <td>{{$attendancegroup->id}}</td>
                <td>{{$attendancegroup->name}}</td>
                <td>{{$attendancegroup->description}}</td>
                <td>{{$attendancegroup->difficulty}}</td>
                <td>{{$attendancegroup->schoolnew_id}}</td>
         
               
                <td class="row justify-content-center">
                    <a class="btn btn-primary col-3 mr-3" href="{{route('attendancegroup.edit', [$attendancegroup])}}">Edit</a>
                    <a class=" ml-3 btn btn-secondary col-3" href="{{route('attendancegroup.show', [$attendancegroup])}}">Show</a>

                    <form class="col-3" method="post" action="{{route('attendancegroup.destroy', [$attendancegroup])}}">
                        @csrf
                        <button class="btn btn-danger " type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>