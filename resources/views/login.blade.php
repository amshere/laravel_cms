
@include('layout.head')
@include('layout.navbar')
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="{{route('login-user')}}" method="post"> 
        @if (Session::has('success'))
            <div class="alert alert-success">{{Session::get('sucess')}}</div>
        @endif 
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif   
        @csrf
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text"name="email" placeholder="Email" value = "{{old('email')}}" required>
            <span class="text-danger">@error('email') {{$message}} @enderror</span><br>
          </div>
          <br>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
            <span class="text-danger">@error('password') {{$message}} @enderror</span><br>
            
          </div>
          <br>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="register">Signup now</a></div>
        </form>
      </div>
    </div>
    
  </body>
  
</html>
