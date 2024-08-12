<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STORE CITY</title>
</head>
<body>
    <h2>Insert City</h2>
    <form action="{{url('city/create')}}" method="post">
        @csrf
        <label>Enter City: </label>
        <input type="text" name="name">
        <button>Save City</button>
    </form>
</body>
</html>