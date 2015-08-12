<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <head>
    <title>guitarwar signup</title>
  </head>
  <body>
    <!DOCTYPE html>
<html>
  <head>
    <title>signup form</title>
    <style media="screen">
      .container{
        text-align: center;
        margin-top: 10%;
      }
      .box{
        font-size: 20px;
        color:yellow;

        }
        body{
          background-image: url(http://www.lifecoach101.com/wp-content/uploads/2014/02/highquality_pictures_of_beautiful_red_carpet_03_1704491.jpg);
          background-image:
          background-repeat: no-repeat;
          background-size: 100%;
          }
        input{
          margin-left: 40px;
          margin-top: 30px;
        }
        h1{
          font-family:serif;
        }
        .snup{
          font-size: 20px;
          border: 1px solid black;
          border-radius: 5px;
          color:black;
        }
        .acc{
          color: gold;
        }
        .gut{
          color:teal;
        }
    </style>
  </head>
  <body>

    <?php
    require_once "gututil.php";
    $error = "";
    $isError = false;
    $name = "";
    $username ="";
    $email = "";
    // echo "$error";

    require_once "gutconfig.php";
     if(isset($_POST['signup'])) {
       $name = trim($_POST['name']);
       $username =trim($_POST['username']);
       $email =trim($_POST['email']);
       $password = $_POST['password'];
       $confirmpassword = $_POST['confirmpassword'];
       if(empty($name)) {
         $error = $error."<br>"."Name field is empty";
         $isError= true;
       }
       if(empty($username)) {
         $error = $error."<br>"."username field is empty";
         $isError= true;
       }


    if(!preg_match('/^[a-z0-9_-]{3,16}$/',$username)){
      $isError = true;
      $error = $error."<br>"."user should contain only alphabets,numbers, - and _ .should be 3 to 16 characters long";
    }

    if(isusernameExists($username)) {
      $isError = true;
      $error = $error."<br>"."username already exists.please try different one";
    }
       if(empty($email)) {
         $error = $error."<br>"."email field is empty";
         $isError=true;
       }

       if(!preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/',$email)) {
         $isError = true;
         $error = $error."<br>"."email is not valid";
       }

       if(isEmailExists($email)) {
         $isError = true;
         $error = $error."<br>"."'email already exists.please try different one'";
       }



       if(empty($password)) {
         $error = $error."<br>"."password field is empty";
         $isError=true;
       }
       if(empty($confirmpassword)) {
         $error = $error."<br>"."confirmpassword field is empty";
         $isError=true;
       }

       if($password != $confirmpassword) {
         $isError = true;
         $error = $error."<br>"."oops! password entered and confirmed doesn't match";
       }
       if(!$isError){
         $query = "insert into users(firstname,lastname,email,username,password,picture) values('$firstname','$lastname','$email','$username'SHA('$password'),'$picture')";
         $result = executequery($query);
         echo $error;
         echo "user with username ".$username."has been created successfully";
       }

     }

    ?>
    <div class="container">
      <h1 class="gut">gUiTaRwArS</h1>
      <h2 class="acc">CREATE AN ACCOUNT</h2>
      <form class=""  method="post">
        <!--- error is shown here ---->
        <p>
          <?php echo $error; ?>
        </p>
        <div class="box">



        <label for="name">Name :</label>
        <input type="text" name="name" value="<?php  echo $isError ? $name:  ""; ?> ">
        <br>
        <!-- <br> -->
        <label for="username">Username :</label>
        <input type="text" name="username" value="<?php echo $isError ? $username:  ""; ?> ">
        <br>
        <label for="email">Email :</label>
        <!-- <br> -->
        <input type="text" name="email" value="<?php echo $isError ?  $email:  ""; ?> ">
        <br>
        <label for="password">Password :</label>
        <!-- <br> -->
        <input type="password" name="password" value="">
        <br>
        <label for="confirmpassword">Confirmpassword :</label>
        <input type="password" name="confirmpassword" value="">
        <br>
        <input class="snup" type="submit" name="signup" value="signup">
      </div>

      </form>


  </body>
</html>
