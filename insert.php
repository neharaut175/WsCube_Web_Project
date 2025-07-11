<?php
  //Database Configuration



  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "registration_database";

  //Create Connection

  $conn = new mysqli($servername,$username,$password,$dbname);

  //check connection

  if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);

  }

  // prepare and bind

  $stmt = $conn->prepare("INSERT INTO Registration_Details (Name,Email,Contact_Number) VALUES(?,?,?)");
  $stmt->bind_param("sss", $Name,$Email,$Contact_Number);

  //set parameters and execute

  $Name=$_POST['username'];
  $Email=$_POST['useremail'];
  $Contact_Number=$_POST['userphone'];
  $stmt->execute();

  echo "New record created successfully";
  $stmt->close();
  $conn->close();





?>