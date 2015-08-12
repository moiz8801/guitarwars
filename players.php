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
    .st{
      height:150px;
      background:orange;
      margin-top: 50px;
      margin-left:50px;
      border-radius: 10px;
    }
    .hgh{
      font-size: 20px;
      font-style: oblique;
      color: red;
    }


    </style>
    <title>players page</title>
  </head>
  <body>
    <?php
    require_once "sss.php";
     ?>

    <div class="container-fluid">

      <div class="row">
        <div class="col-md-3 sty"><a class="hf" href="">Leader board</a></div>
          <div class="col-md-3 sty"><a class="hf"href="">Players</a></div>
            <div class="col-md-3 sty"><a class="hf" href="">My profile</a></div>
              <div class="col-md-3 sty"><a class="hf" href="gut1.php">Logout</a><div>
              </div>
            </div>




            <div class="row">
              <div class="col-md-4 col-md-offset-4   sty"><a class="hf1" href="">Players</a>
              </div>
              </div>
              <div class="col-md-offset-9 col-md-3">
                <p class="hgh">
                  highscore : 25000
                </p>
              </div>
              <div class="row">
                <div class="col-md-4 st"><div class="col-md-3"><img class="img-responsive" src="myimages/moiz1.jpg" alt="player2" /></div>
                <div class="col-md-9">
                  <form class="" action="" method="post">
                     <label for="name">Name :amar</label><br>
                     <label for="score">score :420</label>
                     </form>
                 </div>
                </div>
                </div>


                <div class="row">
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 st"><div class="col-md-3"><img class="img-responsive" src="myimages/moiz1.jpg" alt="player2" /></div>
                    <div class="col-md-9">
                      <form class="" action="" method="post">
                         <label for="name">Name: sahil</label><br>
                         <label for="score">score :400</label>
                         </form>
                     </div>
                    </div>
                    </div>


                    <div class="row">
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 st"><div class="col-md-3"><img class="img-responsive" src="myimages/moiz1.jpg" alt="player2" /></div>
                        <div class="col-md-9">
                          <form class="" action="" method="post">
                             <label for="name">Name :samar</label><br>
                             <label for="score">score :600</label>
                             </form>
                         </div>
                        </div>
                      </div></div>









  </body>
</html>
