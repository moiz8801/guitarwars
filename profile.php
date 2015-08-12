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
      border: 1px solid black;
      border-radius: 12px;
    }
    .hf{
      margin-left:105px;
      margin-top: 17px;
      color:pink;
      font-size:20px;
      display: inline-block;
    }
    .hf1{
      margin-left:170px;
      margin-top: 17px;
      color:pink;
      font-size:20px;
      display: inline-block;
    }
    .box{
      /*background: silver;*/
    }
    .playerScore{
 border: 1px solid black;
 border-radius: 10px;
}
.addScoreBox{
 border: 2px solid black;
 border-radius: 10px;

}
.tsize{
 font-size: 25px;
}
.tsize2{
 font-size: 18px;
 border: 1px solid black;

}
.nav3{
 margin-top: 20px;
 margin-bottom: 20px;
 border: 2px solid black;
 border-radius: 10px;
 font-size: 28px;
 /*background-color: pink;*/
}
.pll{
  margin-top: 20px;
}
    </style>
    <title>profile page</title>

  </head>
  <body>
    <?php
    require_once "sss.php";
     ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 sty"><a class="hf" href="">Leader board</a></div>
          <div class="col-md-3 sty"><a class="hf"href="players.php">Players</a></div>
            <div class="col-md-3 sty"><a class="hf" href="">My profile</a></div>
              <div class="col-md-3 sty"><a class="hf" href="gut1.php">Logout</a><div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-md-offset-4   sty"><a class="hf1" href="">myprofile</a>
              </div>
              </div>





<div class="box">


   <div class=" col-sm-offset-1 col-sm-10 col-sm-offset-1 nav3 ">
     <p>My Profile</p>
   </div>

   <div class="container-fluid">
     <div class="col-sm-8 profileBox">
       <div class="col-sm-4">
         <img class="img-responsive" src="myimages/profile.jpg" alt="profile" />
       </div>
       <div class="col-sm-8 tsize">
         <p>Name:moiz</p>
         <p>UName:<a href="#">abdul </a></p>
         <p>score:2500</p>
         <!-- Rank:120 <br> -->
       </div>
     <!-- </div> -->
       <div class="col-sm-12">
       <hr>
         <p class="tsize">Activities</p><br>
         <p class="tsize2">Added rehan</p>
         <p class="tsize2">Added New High Score</p>
         <p class="tsize2" >Added muzaffar</p>
         <p class="tsize2">changed profile picture</p>
         <p></p>


       </div>
   </div>


   <div class="col-sm-4">
     <form class="form-horizontal  addScoreBox">
       <p class="col-sm-offset-2 col-sm-8 highScore">Add Score</p>
   <div class="form-group">
     <label for="inputEmail3" class=" col-sm-4 control-label">Score :</label>
     <div class="col-sm-7">
       <input type="email" class="form-control" id="inputEmail3" placeholder="Score">
     </div>
   </div>
   <div class="form-group">
     <label for="inputPassword3" class=" col-sm-4 control-label">Upload SS :</label>
     <div class="col-sm-7">
       <input type="file" class="form-control">
     </div>
   </div>
   <div class="form-group">
     <div class="col-sm-offset-4 col-sm-8">
       <button type="submit" class="btn btn-default">Add</button>
     </div>
   </div>
   </form>
   <br>
   <div class="pll" class="col-sm-12 ">Friends</div>
  <br><br>
   <div class="col-sm-12">
     <div class="row playerScore">
         <div class="col-sm-2"><img class ="img-circle profilePic"src="" alt=""/></div>
         <div class="col-sm-4 player"><a href="#">moiz111</a></div>

         <div class="col-sm-4 player">7000</div>
     </div><br>

     <div class="row playerScore">
         <div class="col-sm-2"><img class ="img-circle profilePic"src="" alt=""/></div>
         <div class="col-sm-4 player"><a href="#"> moiz111</a></div>

         <div class="col-sm-4 player">7000</div>
     </div><br>
     <div class="row playerScore">
         <div class="col-sm-2"><img class="img-responsive" src="" alt=""/></div>
         <div class="col-sm-4 player"><a href="#">moiz111 </a></div>

         <div class="col-sm-4 player">7000</div>
     </div>

   </div>
   </div>

 </div>
  </body>
</html>
