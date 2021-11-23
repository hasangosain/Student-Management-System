<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
  <body>

<form class="box" action="{{url('/login')}}" method="post">
    @csrf
  <h1>Login</h1>
  <input type="text" name="name" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit"  value="Login">
</form>


  </body>
</html>
