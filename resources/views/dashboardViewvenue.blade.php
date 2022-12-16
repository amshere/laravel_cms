<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adashboard.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css"/>
 
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
    <div class="viewVenue">
        <h3>Venue List</h3><br>
        
        <table class="table">
            <thead>
                <th>S.N</th>
                <th>Name</th>
                <th>Address</th>
                <th>Capacity</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($venues as $venue)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$venue->name}}</td>
                    <td>{{$venue->address}}</td>
                    <td>{{$venue->capacity}}</td>
                    <td>{{$venue->price}}</td>
                    <td class="img-td"><img scr="{{ asset('uploads/venues/'.$venue->photo) }}" width="100px" height="100px" alt=""/></td>
                    <td id="button_action">
                        <a href="/dashboardEditvenue/{{$venue->id}}" class="btn-info">Edit</a>
                        <form method ="post" action="/deleteVenue/{{$venue->id}}">
                            @csrf
                            @method('delete')
                            <button type ="submit" class="btn-danger">Delete</button>
                        </form>    
                    </td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
<script>
// $(document).ready(function () {
//     $('.table').DataTable();
// });
</script>
</html>