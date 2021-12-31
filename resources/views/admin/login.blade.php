
<!DOCTYPE html>

<html>

<head>

 <title>Login Form</title>

 <!-- <link rel="stylesheet" href="style.css"> -->
 <style>
@font-face {
    font-family: "Poppins-bold";
    src: url("../../font/Poppins-bold.ttf");
}

@font-face {
    font-family: "Poppins-extrabold";
    src: url("../../font/Poppins-extrabold.ttf");
}

@font-face {
    font-family: "Poppins-medium";
    src: url("../../font/Poppins-medium.ttf");
}

@font-face {
    font-family: "Poppins-regular";
    src: url("../../font/Poppins-regular.ttf");
}

@font-face {
    font-family: "Poppins-semibold";
    src: url("../../font/Poppins-semibold.ttf");
}
body{

  margin: 0;

  padding: 0;

  font-family: sans-serif;

  background-repeat: no-repeat;

  background-size: cover;
  background-image: url(../../../img/jumbotron.png);
}

.bg .img{
  top: 20%:
}

.box{

  width: 360px;

  padding: 40px;

  position: absolute;

  top: 50%;

  left: 50%;

  transform: translate(-50%,-50%);

  background: #00000069;

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

padding: 8px 10px;

width: 200px;

outline: none;

color: white;

border-radius: 15px;

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

padding: 8px 10px;

outline: none;

color: white;

border-radius: 15px;

transition: 0.25s;

cursor: pointer;
font-family: "Poppins-regular"; 
font-size: 20px;

}

.box .invalid-feedback{
  font-family: "Poppins-semibold";
  font-size: 14px;
  color red: 
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
          <input type="text" name="username" placeholder="Masukan email" class="@error('username') is-invalid @enderror">


          <input type="password" name="password" placeholder="Masukan Password">
          @error('username')
              <div class="invalid-feedback" >
                {{ $message }}
              </div>
          @enderror
          <input type="submit" name="" value="Masuk">
      </form>
    </div>
    

  

</body>
</html>