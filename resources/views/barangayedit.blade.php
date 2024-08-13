<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT BARANGAY</title>
</head>
<body>
    <h2>Insert City</h2>
    <form action="{{url('barangay/'.$barangay->id.'/edit')}}" method="post">
        @csrf
        @method('PUT')
        <label>Edit Barangay Name: </label>
        <input type="text" name="name" value="{{$barangay->name}}"><br>
        <label>City:</label>
        <select name="city_id">
            <option disabled selected>--select city--</option>
            @foreach ($cityData as $cities)
                <option value="{{$cities->id}}">{{$cities->name}}</option>
            @endforeach
        </select>
        <button>Save Barangay</button>
    </form>
    <a href="{{url('/barangay')}}">Back</a>
</body>
</html>