
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
    <div id="welcomeText">
        <p>WELCOME !!</p>
    </div>
    
</body>
</html>
