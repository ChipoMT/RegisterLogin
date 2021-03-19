
<?php
include ('db.php');

if (isset($_POST['Register'])){
  echo '<script>alert(logged in)</script>';

  //variables
  $fullname = $_POST['full_name'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phone_number'];
  $password = $_POST['password'];
  $password2 = $_POST['confirm_password'];

 //security checks
  if(empty($fullname)|| empty($email) ||empty($phonenumber)|| empty($password)||empty($password2) && ($password != $password2)){
    echo "please fill in all details and ensure your passwords match!";
  } else {
    // connect to the database
    $sql = "INSERT INTO 'users'('full_name', 'email', 'phone_number', 'password', 'password2') VALUES ('$fullname', '$email', '$phonenumber', '$password','$password2')";
    $result = mysqli_query($connect, $sql);
          echo "Account created successfully!";
  }
}else {
  echo "you cannot access this file!";
}
 ?>
