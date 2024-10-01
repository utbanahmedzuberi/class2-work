<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer view</title><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
      
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>city</th>
                <th>Gender</th>
                <th>Status</th>
                <th>update</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($view as $info)
              <tr>
                <td>{{$info->id}}</td>
                <td>{{$info->Name}}</td>
                <td>{{$info->Email}}</td>
                <td>{{$info->address}}</td>
                <td>{{$info->city}}</td>
                <td>
                    @if ($info->gender == 'M')
                    Male
                    
                    @elseif ($info->gender == 'F')
                    Female
                    
                    @elseif($info->gender == 'O')
                    Other
                    @endif
                </td>
                <td>
                    @if($info->status == '1')
                    Active
                    @else
                    Non-active
                    @endif
                </td>

                <td>
                    <a href="edit_record/{{$info->id}}"><button class="btn btn-dark">Update</button></a>
                         </td>
<td>
                    <a href ="dlt_record/{{$info->id}}"> <button class="btn btn-dark">Delete</button></a>
                </td>
              </tr>

            @endforeach
        </tbody>
    </table>
</div>
    
    
</body>
</html>