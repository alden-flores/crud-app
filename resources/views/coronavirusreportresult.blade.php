<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AWARENESS REPORT</title>
</head>
<body>
<h3>CORONAVIRUS REPORT RESULT</h3>
<p><strong>TOTAL NUMBER OF PEOPLE WITH CORONAVIRUS: </strong>{{$covPosNum}}</p>
<p><strong>RECOVERED: </strong>{{$covRecoveredNum}}</p>
<p><strong>ACTIVE: </strong>{{$covActiveNum}}</p>
<p><strong>DEATH : </strong>{{$covDeathNum}}</p>
<hr>
<a href="{{url('/awareness')}}">Back</a>
</body>
</html>