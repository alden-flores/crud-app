<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STORE PATIENT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="patientform">
    <h2>Insert Patient</h2>
    <form action="{{url('patient/'.$patient->id.'/edit')}}" method="post">
        @csrf
        @method('PUT')
        <label>Name: </label>
        <input type="text" name="name" value="{{$patient->name}}"><br>
        <label>Barangay:</label>
        <select name="brgy">
            <option disabled selected>--select barangay--</option>
            @foreach ($brgyData as $barangay)
                <option value="{{$barangay->id}}">{{$barangay->name}}</option>
            @endforeach
        </select><br>
        <label>Number: </label>
        <input type="text" name="number" value="{{$patient->number}}"><br>
        <label>Email: </label>
        <input type="text" name="email"><br>
        <label>Case Type: </label>
        <select name="caseType" id="caseType">
            <option disabled selected>--select case type--</option>
            <option value="PUI">Person Under Investigation</option>
            <option value="PUM">Person Under Monitoring</option>
            <option value="covidPositive" class="covidPositive">Positive on Covid</option>
            <option value="covidNegative">Negative on Covid</option>
            
        </select><br>
        <div class="coronavirus">
        <label>Coronavirus Status: </label>
        <select name="coronavirus">
            <option disabled selected>--select status--</option>
            <option value="active">Active</option>
            <option value="recovered">Recovered</option>
            <option value="death">Death</option>
        </select><br>
    </div>
        <button>Save Patient</button>
    </form>
</div>
    <a href="{{url('/patient')}}">Back</a>
</body>

<script>
$(document).ready(function (){
    $(".coronavirus").hide();
    $("#caseType").change(function (){
        if($("#caseType").val() == "covidPositive"){
        $(".coronavirus").show();
    }
    else{
        $(".coronavirus").hide();
    }
    })
  

})
</script>
</html>