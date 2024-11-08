<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    @if(session('message'))
    {{session('message')}}
    @endif
    <form action="{{url('submit')}}" method="post">
        @csrf
        Title: <input type="text" name="title" id=""><br>
        Description: <input type="text" name="desc" id=""><br>
        <button>Submit</button>
    </form>
</body>
</html>