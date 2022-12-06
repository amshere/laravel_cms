
@include('layout.head')
@include('layout.navbar')
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background-image: url("topimg.jpg");
  
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 450px;
  padding: 0 20px;

  
  margin: 100px auto;
}
.wrapper{
  width: 100%;
  height: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #16a085;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}

.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #16a085;
  border: 1px solid #16a085;
  cursor: pointer;
}
form .button input:hover{
  background: #12876f;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .login-link a{
  color: #16a085;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}

    </style>   
</head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Sign Up Form</span></div>
        <form action="#">
          <div class="row">
            
           <label> First Name :</label>
            <input type="text" placeholder="Enter First Name" required><br>
          </div>
          <br>
          <div class="row">
          <label>Last Name :</label>
            <input type="text" placeholder="Enter Last Name" required>
          </div>
          <br>
          <div class="row">
          <label>Email :</label>
            <input type="text" placeholder="Enter Email" required>
          </div>
          <br>
          <div class="row">
          <label>Password :</label>
            <input type="password" placeholder="Enter Password" required>
          </div>
          <br>
          <div class="row">
          <label>Confirm Password :</label>
            <input type="password" placeholder="Confirm Password" required>
          </div>
          <br>
          <div class="row">
          <label>Register as :</label>
          <select name="role" id="role">
            <option value="user">User</option>
            <option value="venue owner">Venue Owner</option>
            
        </select>
        <br>
          </div>
          <div class="row button">
            <input type="submit" value="Sign Up">
          </div>
          <div class="login-link">Already a member? <a href="login">Login now</a></div>
        </form>
      </div>
    </div>
   
  </body>
  
</html>
