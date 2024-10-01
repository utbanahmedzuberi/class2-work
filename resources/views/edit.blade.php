
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registration Form</title>
</head>

<body>
    <div class="container my-5 text-center">
        <h1 class="text-primary">Edit info</h1>
        <form class="my-5" action="{{url('update_data' , $edit->id) }}"  method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6 my-3">
                    <input type="text" name="name" value="{{$edit->Name}}" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="col-lg-6 my-3">
                    <input type="email" name="email" value="{{$edit->Email}}" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-lg-6 my-3">
                    <input type="text" name="address" value="{{$edit->address}}" class="form-control" placeholder="Address" required>
                </div>
                <div class="col-lg-6 my-3">
                    <input type="text" name="city" value="{{$edit->city}}" class="form-control" placeholder="City" required>
                </div>
                <div class="col-lg-6 my-3">
                    <select name="gender" value="{{$edit->gender}}" class="form-control" required>
                        <option value="">Select Gender</option>
                        <option value="M">M</option>
                        <option value="F">F</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="col-lg-6 my-3">
                    <select name="status" value="{{$edit->status}}" class="form-control" required>
                        <option value="">Select Status</option>
                        <option value="0">On</option>
                        <option value="1">Off</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
