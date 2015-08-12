<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>guitarwar world</title>
    <style media="screen">
      body{
;
        background-image: url(http://img10.deviantart.net/d01f/i/2010/298/9/a/phantom_of_the_opera__library_by_kidy_kat-d31i0as.jpg);
        background-repeat: no-repeat;
        background-size:100%;
      }
      .snp{
        margin-left: 47%;
        margin-top:200px;
        display: inline-block;
        text-decoration: none;
        color: yellow;
        font-size: 18px;
      }
      form{
        text-align: center;
        margin-top: 38px;
      }
      .sb{
        margin-top:10px;
        width: 70px;
      }
      input{
        height: 25px;
        width: 200px;
        border: 1px solid red;
        border-radius: 5px;
      }

    </style>
  </head>
  <body>
    <?php
    $error = "";
    require_once "gututil.php";
     if(isset($_POST['login'])) {
       $gotusername = trim($_POST['username']);
       $gotpwd = $_POST['password'];
       if(isValidCredentials($gotusername,$gotpwd)) {
         session_start();
         $_SESSION['username'] = $gotusername;
        //  setcookie('username',$gotusername);
        //  setcookie('userid',getUserId($gotusername));
        $userId = getUserId($gotusername);
        $_SESSION['userId']=$userId;
        // setcookie('userId',$userId);
         echo "logged in successfully";
         header("Location: gutmain.php");

       }
       else{
         $error = "invalid credentials.please try again";
       }
     }

     ?>
    <a class="snp"href="gutsignup.php">SIGNUP</a>
    <div class="ff1">
    <form class="" action="" method="post">
      <?php echo $error; ?>
      <input type="text" name="username" value="" placeholder="username">
      <br>
      <br>
      <input type="password" name="password" value="" placeholder="password">
      <br>
      <input class="sb"type="submit" name="login" value="login">

    </form>

  </div>
  </body>
</html>
