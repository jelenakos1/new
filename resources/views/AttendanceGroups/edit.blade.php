<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <h1>Edit</h1>

        <form method="POST" action="{{route('attendancegroup.update', [$attendancegroup])}}">

        <input class="form-control" type="text" value="Test" name="attendancegroup_name" placeholder="AttendanceGroup Name" />
            <input class="form-control" type="text" value="Test" name="attendancegroup_description" placeholder="AttendanceGroup Description " />
            <input class="form-control" type="text" value="Test" name="attendancegroup_difficulty" placeholder="AttendanceGroup difficulty" />
            <input class="form-control" type="text" value="Test" name="attendancegroup_schoolnew_id" placeholder="AttendanceGroup Schoolnew Id" />
        
            <select name="attendancegroup_school_id" class="form-control">
          


        </select>


            @csrf

            <button class="btn btn-primary" type='submit'>Edit</button>
            <a class="btn btn-secondary" href="{{route('attendancegroup.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>