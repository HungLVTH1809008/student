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
        <th>Email</th>
        <th>telephone</th>
        <th>Feedback</th>
        <th>active</th>

        </thead>

        <tbody>

        @foreach($students as $student)
            <tr>
                <td >{{$student->student_id}}</td>
                <td >{{$student->student_name}}</td>
                <td >{{$student->email}}</td>
                <td >{{$student->telephone}}</td>
                <td >{{$student->feedback}}</td>
                <td>{{$student->active}}</td>

            </tr>

        @endforeach

        </tbody>
    </table>
</div>



</body>
</html>