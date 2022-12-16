
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adashboard.css">
    <style>
        * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }
  * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }
  body {
    font-family: sans-serif;
  }
  nav {
    background: #222;
    padding: 5px 20px;
    position: fixed;
    top:0px;
    left:0px;
    right:0px;
   
  }
  ul {
    list-style-type: none;
  }
  a {
    color: white;
    text-decoration: none;
  }
  a:hover {
    text-decoration: underline;
  }
  .logo a:hover {
    text-decoration: none;
  }
  .menu li {
    font-size: 16px;
    padding: 15px 5px;
    white-space: nowrap;
  }
  .menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }
 li{
    color: whitesmoke;
 }
 .side_menu{
    background-color:#222;
    height: 100%;
    width: 15%;
    top: 60px;
    left: 0;
    position: fixed;
    bottom: 0;
    right: 0;
     border: 3px solid black;
 }
 .sideMenu{
    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 7px  7px #888888;
    margin-bottom: 5px;
    text-align: center;
 }
 .side_menu a:hover{
    text-decoration: none;
    text-shadow: 0 0 5px #ff0000; 
  
 }
 .addVenueForm{
    
    height:500px;
    width: 500px;
    position: relative;
    left:500px;
    top:60px;
    
   
    
 }
 
 .mb-3{
    height: 80px;
    width: 100%;
    
 }
label{
    
    margin-bottom: 10px;
    padding-bottom: 10px;
 }
 .container input{
    width:500px;
    height: 40px;
    margin-top: 10px;
  
 }
 .container button{
    margin-top: 5px;
    background-color: rgb(47, 47, 233);
    color: aliceblue;
    width: 60px;
    height:30px;
    border-radius: 5px;
 }
 #welcomeText{
  height:500px;
  width: 500px;
  position: relative;
  left:500px;
  top:60px;
  color:#ff0000;
  font-size: 80px;
 }

.viewVenue{
  position: relative;
  left:300px;
  top:60px;
  width:100vh;
  padding-top: 50px;
}

    </style>
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
        <h3>Edit Venue</h3>
    <div class="container">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
        @endif    
        <form action="/updateVenue/{{$venue->id}}" method ="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="">Name :</label><br>
            <input type="text" name="name" required class="form-control" placeholder="Enter Venue Name" value="{{$venue->name}}">
        </div>
        <div class="mb-3">
            <label for="">Address :</label><br>
            <input type="text" name="address" required class="form-control" placeholder="Enter Venue Address" value="{{$venue->address}}">
        </div>
        <div class="mb-3">
            <label for="">Price :</label><br>
            <input type="num" name="price" required class="form-control" value="{{$venue->price}}">
        </div>
        <div class="mb-3">
            <label for="">Capacity :</label><br>
            <input type="num" name="capacity" required class="form-control" value="{{$venue->capacity}}">
        </div>
        <div class="mb-3">
            <label for="">Upload Image :</label><br>
            <input type="file" name="photo" required class="course form-control" value="{{$venue->photo}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="submit" class="btn btn-primary">Back</button>
        </div>
        
        </form>
                
    </div>
    </div>
    
</body>
</html>
