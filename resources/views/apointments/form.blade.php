<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    <div class="container m-4">
        <form action="{{route('apointments.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group mb-4">
                <label for="email" class="col-form-label">Email Addres</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
              </div>
            <button type="submit" class=" btn btn-outline-primary">  submit</button>
        </form>
    </div>
</body>
</html>