<?php

// if (isset($_POST["FirstName"], $_POST["LastName"], $_POST["email"])){

$errors = [
  "FirstNameErrors"=> "",
  "LastNameErrors"=> "",
  "EmailErrors"=> ""

];





if (isset($_POST["submit"])) {

  $FirstName = mysqli_real_escape_string($conn,$_POST["FirstName"]);
  $LastName =  mysqli_real_escape_string($conn,$_POST["LastName"]);
  $email =     mysqli_real_escape_string($conn,$_POST["email"]);
  

  //echo $FirstName . " " . $LastName . " " . $email;
  if (empty($FirstName)) {

    $errors['FirstNameErrors'] = "enter your firstname";
    
  }
  
  if (empty($LastName)) {
    
    $errors['LastNameErrors'] = "enter your lastname";

  }
  
  if (empty($email)) {
    
    $errors['EmailErrors'] = "enter your email";

  }
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
    $errors['EmailErrors'] = "the email format is not correct";

  } else {
    
    $sql = "INSERT INTO users3(firstname, lastname, email) VALUES ('$FirstName','$LastName','$email')";
  
    mysqli_query($conn, $sql);
    
    header('Location:' . $_SERVER['PHP_SELF'] );
  }


}
// }
