<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Students</title>
</head>

<body>
    <div class="container">
        <h1>Index</h1>
        @if (count($students) == 0)
        <p>There is no students</p>
        @endif


        <a class="btn btn-primary" href="{{route('students.create')}}">Create new student date</a>
        <table class="table table-striped">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Group ID</th>
                <th>Group level(difficulty)</th>
                <th>Image Url</th>
                <th>Actions</th>
            </tr>

            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->studentAttendanceGroup->name}}</td>
                <td>{{$student->studentAttendanceGroup->difficulty}}</td>
                <td>{{$student->image_url}}</td>
                <td class="row justify-content-center">
                    <a class="btn btn-primary col-3 mr-3" href="{{route('student.edit', [$student])}}">Edit</a>
                    <a class=" ml-3 btn btn-secondary col-3" href="{{route('student.show', [$student])}}">Show</a>

                    <form class="col-3" method="post" action="{{route('student.destroy', [$student])}}">
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