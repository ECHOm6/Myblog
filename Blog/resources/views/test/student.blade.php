<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="{{route('student')}}">
    ame:<input type="text" name="name">
    classnum:<input type="text" name="classnum">
    <input type="submit" value="submit">
</form>
<table>
    <thead>
    <tr><td>id</td><td>name</td><td>classnum</td></tr>
    </thead>
    <tbody>
    @foreach($data as $val)
    <tr>
        <td>{{$val->id}}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->classnum}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
