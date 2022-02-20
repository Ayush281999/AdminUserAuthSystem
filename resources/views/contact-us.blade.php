<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<h1>Register</h1>
 
 <form method="POST" action ="{{route('contact.send') }}"enctype="multipart/form-data">
             @csrf
 <div class="form-group, style=" margin-left:270px;="" style="
     margin-left: 270px;
     margin-right: 850px;
 ">
 <h2>Register</h2>
       <div class="form-si">
     <label for="name">First Name</label>
     <input type="text" class="form-control" name="name"placeholder="Enter name">
 
     <label for="name">Email</label>
     <input type="text" class="form-control" name="email"placeholder="Enter name">
 
     <label for="name"> Phone</label>
     <input type="text" class="form-control" name="phone"placeholder="Enter name">
 
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 </form>
 
    
</body>
</html>
