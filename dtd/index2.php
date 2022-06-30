<?php
if(isset($_POST['Emailid'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".
         mysqli_connect_error());

    }
   
    
     
       $Emailid = $_POST['Emailid'];
       $password = $_POST['password'];
       $Name = $_POST['Name'];
       $Storename = $_POST['Storename'];
       $Address = $_POST['Address'];
       $Items = $_POST['Items'];
        
       $sql="INSERT INTO `food`.`2` ( `Emailid`, `password`, `Name`, `Storename`, `Address`, `Items` ) VALUES ( '$Emailid', '$password', '$Name', '$Storename', '$Address', '$Items')";

    if($con->query($sql) == true){
      // echo "successful";
     }

    else{
      echo "error: $sql <br> $con->error";
    }
    $con->close();
  }     
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical store </title>
    <link rel="stylesheet" href="electrical-storestyle.css">
</head>
<body>
    <nav class="navbar ">
        <ul class="navlist">
            <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
            <li><a href="home.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="#contact">Contact us</a></li>

        </ul>
        <div class="rightnav">
            <input type="text" name="search" name="search" id="search">
            <button class="srchbtn">Search</button>
        </div>

    </nav>
    <section class="boxmain background">
        <form action="index2.php" method="post"    class="form">
            <div class="email space ">
              <label for="inputEmail4" class="form-label">Email id</label>
              <input type="email" class="form-control" id="inputEmail4" name="Emailid">
            </div>
            <div class="password space ">
              <label for="inputPassword4" class="form-label">password</label>
              <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="name space ">
              <label for="inputAddress" class="form-label">Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Enter your full name here" name="Name">
            </div>
            <div class="store-name space ">
              <label for="inputAddress" class="form-label">Store-name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Enter the store  name here" name="Storename">
            </div>
            <div class="address space ">
              <label for="inputAddress" class="form-label">Address </label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor" name="Address">
            </div>
            <div class="items space ">
              <label for="inputitems" class="form-label">Items </label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Enter the items you want to order" name="Items">
            </div>
        
            <div class="sumbit space ">
              <button type="submit" class="btn btn-primary">Sumbit</button>
            </div>
          </form>
    </section>
    
</body>
</html>