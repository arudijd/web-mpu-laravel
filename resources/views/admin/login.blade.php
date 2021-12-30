
<!DOCTYPE html>

<html>

<head>

 <title>Login Form</title>

 <!-- <link rel="stylesheet" href="style.css"> -->
 <style>
@font-face {
    font-family: "Poppins-medium";
    src: url("../../font/Poppins-medium.ttf");
}

@font-face {
    font-family: "Poppins-regular";
    src: url("../../font/Poppins-regular.ttf");
}
body{

  margin: 0;

  padding: 0;

  font-family: sans-serif;

  background-repeat: no-repeat;

  background-size: cover;
  background-image: url(../../../img/jumbotron.png);s
  height: 100%;
}

.bg .img{
  top: 20%:
}

.box{

  width: 350px;

  padding: 40px;

  position: absolute;

  top: 60%;

  left: 50%;

  transform: translate(-50%,-50%);

  background: #000000;

  text-align: center;

  border-radius: 20px;

}

.box h1{

color: #ffffff;

font-family: "Poppins-regular"; 

font-weight: 100;
font-size: 24px;



}

.box input[type = "text"], .box input[type = "password"]{

border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #3498db;

padding: 14px 10px;

width: 200px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;

}

.box input[type = "text"]:focus,.box input[type = "password"]:focus{

width: 280px;

border-color: #2ecc71;

}



.box input[type = "submit"]

{

 border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #2ecc71;

padding: 14px 40px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;

cursor: pointer;

}

.box .invalid-feedback{
  background: #ffffff
}



.box input[type = "submit"]:hover

{

background: #2ecc71;

}

 </style>
<link rel="stylesheet" href="{{ asset("/css/bootstrap.css") }}">
</head>


<body>
<div class="bg">
  <div class="div d-flex justify-content-center align-items-center">
    <div class="row mt-5">
      <img src="{{asset("\img\logo.png")}}" alt="logo" width="60%" class="rounded mx-auto d-block">
    </div>
    <div class="row">
      <form class="box" action="/login" method="post">
          <h1>Selamat Datang</h1>
          @csrf
          <input type="text" name="username" placeholder="Username" class="@error('username') is-invalid @enderror">


          <input type="password" name="password" placeholder="Password">
          @error('username')
              <div class="invalid-feedback" >
                {{ $message }}
              </div>
          @enderror
          <input type="submit" name="" value="Login">
      </form>
    </div>
    
  </div>
  <form class="box" action="/login" method="post">

    <h1>Login Here</h1>
    @csrf
    <input type="text" name="username" placeholder="Username" class="@error('username') is-invalid @enderror">
  
  
    <input type="password" name="password" placeholder="Password">
    @error('username')
        <div class="invalid-feedback" >
          {{ $message }}
        </div>
    @enderror
    <input type="submit" name="" value="Login">
  
    </form>
</div>
  

</body>
</html>