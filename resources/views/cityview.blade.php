<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIEW CITY</title>
</head>
<body>
    <h2>View City</h2>
   <p><strong>Name: </strong> {{$city->name}}</p>
    <a href="{{url('/city')}}">Back</a>
</body>
</html>