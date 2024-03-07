<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - 403 error message</title>
  <link rel="stylesheet" href="{{asset('css/style403.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<head><link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
  <div class="message">You are not authorized.
  </div>
  <div class="message2">
    You tried to access a page you did not have prior authorization for.
    <br><br>
    Please Logout and Login again with the right account.
    <br>
    <button style="background-color: lightgreen; padding: 15px; border-radius: 15px; margin-top: 20px; border: 0px;" onclick="location.href = '{{url()->previous()}}'">Go Back</button>
  </div>
  <div class="container">
    <div class="neon">403</div>
    <div class="door-frame">
      <div class="door">
        <div class="rectangle">
      </div>
        <div class="handle">
          </div>
        <div class="window">
          <div class="eye">
          </div>
          <div class="eye eye2">
          </div>
          <div class="leaf">
          </div> 
        </div>
      </div>  
    </div>
  </div>
</body>
<!-- partial -->
  
</body>
</html>