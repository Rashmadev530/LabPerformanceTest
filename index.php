 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap-4.5.0-dist/css/bootstrap.min.css"/>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		<h1 class="text-center">LIBRARY MANAGEMENT</h1>
		<h2 class="text-center">Member Registration</h2>
		<form action="index.php" method="post">
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="adress">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Street</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="street" >
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="city" >
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" >
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="age" >
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" >
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="pass" >
    </div>
  </div>
  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="conpass" >
    </div>
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Sign in</button>
</form>
	</div>
</div>

</body>
</html> 

<?php
 $conn=mysqli_connect("localhost","root","","lib_manage");
 if($conn){
 	echo"Connect Sucessfully";
 	
 		
 		
 $stmt = $conn->prepare("INSERT INTO reg(id, name, adress, city, street,phone, age, email, pass,conpass) VALUES (?,?,?,?,?,?,?,?,?,?)");
      
      
      $stmt->bind_param("isssssssss",$id,$name,$add,$city,$street,$phone,$age,$email,$pass,$conpass);
      
       
       
        $id=rand(10,100);
       
	    
 		$city=$_POST['city'];
 		$street=$_POST['street'];
 		$phone=$_POST['street'];
 		$age=$_POST['age'];
 		$email=$_POST['email'];
 		$pass=$_POST['pass'];
 		$conpass=$_POST['conpass'];
 		
 		$stmt->execute();
 		
 	
 	
 	
 	
 }
 else{
 	echo"Unsuccessfull".mysqli_error($conn);
 }
?>