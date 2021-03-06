<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <h1>Create</h1>

        <form method="POST" action="{{ route('schoolnew.store') }}">

            <input class="form-control" type="text" value="Test" name="schoolnew_name" placeholder="schoolnew Name" />
            <input class="form-control" type="text" value="Test" name="schoolnew_description" placeholder="schoolnew description" />
            <input class="form-control" type="text" value="Test" name="schoolnew_place" placeholder="schoolnew place" />
            <input class="form-control" type="text" value="Test" name="schoolnew_phone" placeholder="schoolnew phone" />

            <select name="schoolnew_name" class="form-control">
                @for ($i=1; $i<=250; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                @endfor 
                {{-- @foreach ($schoolnews as $schoolnew)
                <option value="{{$schoolnew->id}}">{{$schoolnew->name}}</option>
                @endforeach --}}

            </select>

            @csrf

            <button class="btn btn-primary" type='submit'>Add</button>
            <a class="btn btn-secondary" href="{{route('schoolnew.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>