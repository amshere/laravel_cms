
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adashboard.css">
    <script src="adashboard.js"></script>
    
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="index">VenueFinder</a></li>
            <li class="itembutton" >{{$data->firstname}}</a></li>
        </ul>
        
    </nav>

    <div class="side_menu">
        <ul>
        <li class="sideMenu" id="addVenue"><a href="{{route('dashboardAddvenue')}}">Add Venue</a></li>
            <li class="sideMenu" id="viewVenue"><a href="{{route('dashboardViewvenue')}}">View Venue</a></li>
            <li class="sideMenu" id="viewBooking"><a href="#">View Booking</a></li>
            <li class="sideMenu" id="viewBooking"><a href="logout">Log Out</a></li>
            
        </ul>
    </div>
    <div class="addVenueForm">
        <h3>Add Venue</h3><br>
    <div class="container">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
        @endif    
        <form action="{{url('venue')}}" method ="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Name :</label><br>
            <input type="text" name="name" required class="form-control" placeholder="Enter Venue Name">
        </div>
        <div class="mb-3">
            <label for="">Address :</label><br>
            <input type="text" name="address" required class="form-control" placeholder="Enter Venue Address">
        </div>
        <div class="mb-3">
            <label for="">Price :</label><br>
            <input type="num" name="price" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Capacity :</label><br>
            <input type="num" name="capacity" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Upload Image :</label><br>
            <input type="file" name="photo" required class="course form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
                
    </div>
    </div>
    
</body>
</html>
