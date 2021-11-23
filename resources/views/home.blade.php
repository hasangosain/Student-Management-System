<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="{{asset('css/home.css')}}">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDNT MANAGEMENT SYSTEM</title>
</head>
<body>
   <nav class="navlist">
      <ul>
         <li><h4>TMC.</h4></li>
         <li><a href="#">Home</a></li>
         <li><a href="#">About</a></li>
         <li><a href="{{url('/login')}}">ADMIN_LOGIN</a></li>
         <li><a href="{{url('/signin')}}">TEACHER_LOGIN</a></li>
      </ul>
   </nav>
   <div class="main-box">
      <h1>STUDENT MANAGEMENT SYSTEM</h1>
      <p> An investment in knowledge pays the best interest.Change is the end result of all true learning.</p>
      <button>GET STARTED</button>
   </div>
   <div class="container">
      <h2>FACILITIES</h2>
      <div class="row">
         <div class="column">
         <a href=""><img src="{{asset('images/campus.jpg') }}" alt="Campus"></a>
         <a href="">CAMPUS</a>
         </div>
         <div class="column">
            <a href=""><img src="{{asset('images/cantine.jpeg')}}" alt="Cantine"></a>
            <a href="">CANTINE</a>
         </div>
         <div class="column">
            <a href=""><img src="{{asset('images/library.jpeg')}}" alt="Library"></a>
            <a href="">LIBRARY</a>
         </div>
      </div>
   </div>
</body>
</html>