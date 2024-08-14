<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awareness Report</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <h3>Awareness Report</h3>
    <select name="city" id="city" class="city">
        <option value="0" disabled selected>--select city --</option>
        @foreach ($city as $cities)
        <option value="{{$cities->id}}">{{$cities->name}}</option>
        @endforeach
    </select>
    <form action="{{url('awareness/report')}}" method="post">
        @csrf
        <div class="citybrgy">
       
        <select name="brgy" id="city" class="brgy">
            <option value="0" disabled selected>--select barangay --</option>
        </select>
    </div>
    <button>Generate Report</button>
    </form>
<hr>
    <a href="{{url('/')}}">Back</a>
    
</body>
<script type="text/javascript">
    $(document).ready(function (){
        //This is similar to what I did for the patient form except
        //with the usage of ajax in order to dynamically fill the dropdown menu with
        //the associated barangays of the city
        $(document).on('change','.city',function(){
            
            var city_id=$(this).val();
            var div=$(this).parent()
            var opt = " ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('getbrgy')!!}',
                data:{"id":city_id},
                success:function(data){
                    
                   opt+= '<option value="0" disabled selected>--select barangay --</option>';
                   for (var i = 0; i <data.length; i++){
                   opt += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                div.find('.brgy').html(" ");
                div.find('.brgy').append(opt);
                },
                error:function(){
                    console.log('FAILURE')
                }
            })
            
        })
    })
    </script>
</html>