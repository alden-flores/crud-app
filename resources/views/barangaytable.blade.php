
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Barangay Table View</title>
</head>
<body>
<h3>BARANGAY TABLE</h3>
<a href="{{url('/barangay/create')}}">Add Barangay</a><br>
<hr>
<a href="{{url('/')}}">Back</a>
<div class="table-area">
 
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangays as $barangay)
            <tr>
                <td>{{$barangay->id}}</td>
                <td>{{$barangay->name}}</td>
                <td>{{$barangay->cityName->name}}</td>
            <td> 
                <a href="{{url('barangay/'.$barangay->id.'/view')}}">View</a>
                <a href="{{url('barangay/'.$barangay->id.'/edit')}}">Edit</a>
                <a href="{{url('barangay/'.$barangay->id.'/delete')}}">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>