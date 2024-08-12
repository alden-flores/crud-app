<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT CITY</title>
</head>
<body>
    <h2>Edit City</h2>
    <form action="{{url('city/'.$city->id.'/edit')}}" method="post">
        @csrf
        @method('PUT')
        <label>Enter City: </label>
        <input type="text" name="name" value="{{ $city->name }}">
        <button>Save City</button>
    </form>
    <a href="{{url('/city')}}">Back</a>
</body>
</html>