<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--if statement-->
    @if (10>5)
        <3>Hello World!</h1>
    @endif

    <!--if else statement-->
    @if (100<5)
        <h1> Incorrect </h1>
    @else
        <h1>Correct</h1>
    @endif

    <!--for loop-->
    @for ($i=1; $i<=10; $i++)
        <h3>Hello laravel</h3>
    @endfor

</body>
</html>