<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>


@foreach ($students as $student)
        <h3>{{ $student['id'] }} - {{ $student['name'] }} </h3>
        <br>
        city : {{ $student['city'] }}
        <br>
        Department : {{ $student['Department'] }}
        <hr>
    @endforeach

</body>
</html>