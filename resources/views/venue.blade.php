<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
        @endif    
        <form action="{{url('venue')}}" method ="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" required class="form-control" placeholder="Enter Venue Name">
        </div>
        <div class="mb-3">
            <label for="">Address</label>
            <input type="text" name="address" required class="form-control" placeholder="Enter Venue Address">
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="num" name="price" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Capacity</label>
            <input type="num" name="capacity" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Upload Image</label>
            <input type="file" name="photo" required class="course form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
                
    </div>
    <footer>
            @include('layout.footer')

    </footer>
</body>
</html>



