<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <style media="screen">
      .sty{
        height: 50px;
        background: teal;
        border-radius:20px;
      }
      .hf{
        margin-left:120px;
        margin-top: 17px;
        color:pink;
        font-size:20px;
        display: inline-block;
      }
      .st{
        height:250px;
        background:orange;
        margin-left:50px;
        margin-top: 50px;
        border-radius: 10px;
      }


      .lbl{
        margin-top:45px;
        font-size: 20px;
      }
      label{
        margin-top: 5px;

      }
      img{
        margin-top:45px;
      }
      .hgh{
        /*margin-left:120px;*/
      }

    </style>
    <title>guitarwars mainpage</title>
  </head>
  <?php
  // session_start();
  // if(!isset($_SESSION['username'])){
  //   header('location: /gut1.php');
  // }
  ?>
  <body>
    <?php
    require_once "sss.php"
     ?>
    <div class="container-fluid">

    <div class="row">
      <div class="col-md-3 sty"><a class="hf" href="">Leader board</a></div>
        <div class="col-md-3 sty"><a class="hf" href="players.php">Players</a></div>
          <div class="col-md-3 sty"><a class="hf" href="profile.php">My profile</a></div>
            <div class="col-md-3 sty"><a class="hf" href="gut1.php">Logout</a><div>
            </div>
          </div>

          <div class="col-md-8">

            <div class="row">
              <div class="col-md-8 st">
                <div class="col-md-3"><img class="img-responsive" src="myimages/moiz.jpg" alt="player1" /></div>
              <div class="col-md-9">
               <form class="" action="" method="post">
                  <label class="lbl" for="name">Name :abdul </label><br>
                  <label class="lbl" for="score">score : 500</label>
                 </form>
               </div>
              </div>
              </div>


              <div class="row">
                <div class="col-md-8 st">
                  <div class="col-md-3"><img class="img-responsive" src="myimages/moiz.jpg" alt="player2" /></div>
                <div class="col-md-9">
                 <form class="" action="" method="post">
                    <label class="lbl" for="name">Name : moiz </label><br>
                    <label class="lbl" for="score">score : 300</label>
                    <!-- <input class="input-lg" type="text" placeholder="name"> -->
                   </form>
                 </div>
                </div>
                </div>




          <div class="row">
            <div class="col-md-8 st">
              <div class="col-md-3"><img class="img-responsive" src="myimages/moiz.jpg" alt="player3" /></div>
            <div class="col-md-9">
             <form class="" action="" method="post">
                <label class="lbl" for="name">Name :nasri </label><br>
                <label class="lbl" for="score">score : 250</label>
                <!-- <input class="input-lg" type="text" placeholder="name"> -->
               </form>
             </div>
              </div>
              </div>
              </div>






<br><br><br><br><br>
<div class="hgh">
  <form class="" action="" method="post">
    <label  for="">highscore : 25000</label>

  </form>
</div>
<br><br><br><br><br>


                  <div class="col-sm-4">

         <form class="form-horizontal  addScoreBox">
           <p class="col-sm-offset-2 col-sm-8 ">Add Score</p>

       <div class="form-group">
         <label  for="inputEmail3" class=" col-sm-4 control-label ">Score :</label>
         <div class="col-sm-7">
           <input type="email" class="form-control" id="inputEmail3" placeholder="Score">
         </div>
       </div>
       <div class="form-group">
         <label for="inputPassword3" class=" col-sm-4 control-label ">Upload SS</label>
         <div class="col-sm-7">
           <input type="file" class="form-control">
         </div>
       </div>

       <div class="form-group">
         <div class="col-sm-offset-3 col-sm-8">
           <button type="submit" class="btn btn-default">Add</button>
         </div>
       </div>
     </form>
     </div>



</body>
</html>
