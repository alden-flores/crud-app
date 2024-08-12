
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>City Table View</title>
</head>
<body>
<h3>CITY TABLE</h3>
<a href="{{url('/city/create')}}">Add City</a><br>
<hr>
<a href="{{url('/')}}">Back</a>
<div class="table-area">
 
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>City Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
            <tr>
                <td>{{$city->id}}</td>
                <td>{{$city->name}}</td>
            <td> 
                <a href="{{url('city/'.$city->id.'/view')}}">View</a>
                <a href="{{url('city/'.$city->id.'/edit')}}">Edit</a>
                <a href="">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>