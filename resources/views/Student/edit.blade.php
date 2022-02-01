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

        <form method="POST" action="{{route('student.update', [$student])}}">

            <input class="form-control" type='text' name="student_name" value='{{$student->name}}' />
            <input class="form-control" type='text' name="student_surname" value='{{$student->surname}}' />
            <input class="form-control" type='number' name="student_group_id" value='{{$student->group_id}}' />
            <input class="form-control" type='text' name="student_image_url" value='{{$student->image_url}}' />

            <select name="student_group_id" class="form-control">
                {{-- @for ($i=1; $i<=250; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor --}}
                
                @foreach ($select_values as $student)
                    @if ($student->id == $student->group_id)
                        <option value="{{$student->id}}" selected>{{$student->name}}</option>
                    @else
                        <option value="{{$student->id}}">{{$student->name}}</option>
                    @endif
                @endforeach


        </select>

            <input class="form-control" type='text' name="student_image_url" value="{{$student->image_url}}" placeholder="Student URL"/>
            @csrf

            <button class="btn btn-primary" type='submit'>Edit</button>
            <a class="btn btn-secondary" href="{{route('students.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           
</body>
</html>