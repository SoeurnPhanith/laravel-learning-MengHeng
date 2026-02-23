<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Family List</h1>
    <table border="1">
        <tr>
            <thead>
                <td>Id</td>
                <td>Name</td>
                <td>Gender</td>
            </thead>
            <!--using blade-template to show data from route-->
            @foreach ($family as  $f)
                <tbody>
                    <tr>
                        <td>{{$f['id']}}</td>
                        <td>{{$f['name']}}</td>
                        <td>{{$f['gender']}}</td>
                    </tr>
                </tbody>
            @endforeach
        </tr>
    </table>
    <a href="{{route('welcome')}}">back to welcome page</a>
</body>
</html>