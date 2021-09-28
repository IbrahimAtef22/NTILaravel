
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  
  
  <form method="post" action="{{  url('/store') }}"  enctype ="multipart/form-data">

  

    <input type="hidden" name = '_token'  value = '<?php echo csrf_token();?>'>

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New  Password</label>
    <input type="password" name="password"   class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address"   class="form-control" id="exampleInputPassword1" placeholder="Address">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Gender</label> 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    {{-- <input  class="form-control" id="exampleInputGender" placeholder="Gender"> --}}
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Linkedin URL</label>
    <input type="text" name="linkedinurl"   class="form-control" id="exampleInputPassword1" placeholder="Linkedin URL">
  </div>




  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>



</body>
</html>

