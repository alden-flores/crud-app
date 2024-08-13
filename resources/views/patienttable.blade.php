
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Patient Table View</title>
</head>
<body>
<h3>PATIENT TABLE</h3>
<a href="{{url('/patient/create')}}">Add Patient</a><br>
<hr>
<a href="{{url('/')}}">Back</a>
<div class="table-area">
 
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Barangay</th>
                <th>Phone No.</th>
                <th>Email</th>
                <th>Case Type</th>
                <th>Coronavirus Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patientData as $patient)
            <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->name}}</td>
            <td>{{$patient->barangayName->name}}</td>
            <td>{{$patient->number}}</td>
            <td>{{$patient->email}}</td>
            <td>{{$patient->case_type}}</td>
            <td>{{$patient->coronavirus_status}}</td>
            <td>
                <a href="{{url('patient/'.$patient->id.'/view')}}">View</a>
                <a href="{{url('patient/'.$patient->id.'/edit')}}">Edit</a>
                <a href="{{url('patient/'.$patient->id.'/delete')}}">Delete</a>
            </td>
           <tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>