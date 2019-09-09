<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

    <table class="table table-hover">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>age</th>
        <th>address</th>
        <th>telephone</th>
        <th>active</th>
        <th>Action </th>
        </thead>

        <tbody>

        @foreach($students as $student)
            <tr>
                <td >{{$student->student_id}}</td>
                <td >{{$student->student_name}}</td>
                <td >{{$student->age}}</td>
                <td >{{$student->address}}</td>
                <td >{{$student->telephone}}</td>
                <td>{{$student->active}}</td>

            </tr>

        @endforeach

        </tbody>
    </table>

</div>



</body>
</html>