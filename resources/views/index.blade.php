<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script>
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});
    </script>
</head>
<body>
    @include('layout.navbar')
    <main>
        <div id = "image">
        <img id="topimage" src="topimg.jpg" alt="topimg" width="100%" height="600">
        <div id = "toptext">
            Find your venue now.
        </div>
        </div>

        <div id = "main-body">
            <div id = "filter">

            </div> 
            <div id = "venuecard">
                
            </div>   
        </div>
        <footer>
            @include('layout.footer')

    </footer>
    </main>

        
</body>
</html>