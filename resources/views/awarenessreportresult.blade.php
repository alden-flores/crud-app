<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AWARENESS REPORT</title>
</head>
<body>
<h3>AWARENESS REPORT</h3>
<p><strong>PUI: </strong>{{$puiNum}}</p>
<p><strong>PUM: </strong>{{$pumNum}}</p>
<p><strong>Negative on COVID: </strong>{{$covNegNum}}</p>
<p><strong>Positive on COVID: </strong>{{$covPosNum}}</p>
<hr>
<a href="{{url('/awareness')}}">Back</a>
</body>
</html>