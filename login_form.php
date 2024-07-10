<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = isset($_POST['Name']) ? mysqli_real_escape_string($conn, $_POST['Name']) : '';
   $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
   $password = isset($_POST['password']) ? md5($_POST['password']) : '';
   $cpass = isset($_POST['cpassword']) ? md5($_POST['cpassword']) : '';
   $role = isset($_POST['role']) ? $_POST['role'] : '';

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['role'] == 'admin'){

         $_SESSION['admin_name'] = $row['Name'];
         header('location:admin_page.php');

      }elseif($row['role'] == 'scholar'){

         $_SESSION['scholar_name'] = $row['Name'];
         header('location:scholar_page.php');

      }elseif($row['role'] == 'employee'){

         $_SESSION['employee_name'] = $row['Name'];
         header('location:employee_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="sample@Email.com" required>
      <input type="password" name="password" required placeholder="Password " required>
      <input type="submit" name="submit" value="login now" class="form-btn">
   </form>

</div>

</body>
</html>