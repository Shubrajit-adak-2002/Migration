<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
</head>
<body>
    @if (isset($userInfo))
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($userInfo as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
            </tr>
        @endforeach
    </table>

    @endif
</body>
</html>
