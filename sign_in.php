<?php
// Session Start
  session_start();
// ./Session Start

// pageTitle
  $pageTitle ='تسجيل الدخول';
// ./pageTitle

// SESSION USER
  if(isset($_SESSION["user"])){ header("location:index.php"); }
// ./SESSION USER

// Head & conn
  include 'includes/templates/head.php';
  include 'conn.php';
// ./Head & conn

// Start SERVER
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
  if (empty($_POST["loginUsername"]) || empty($_POST["loginPassword"])){
    $message = ' <div class="alert alert-danger text-center" role="alert"> عفواً كلمة المرور خطاء ! </div> ';
      echo $message; }
  else{
    $email     =  $_POST["loginUsername"];
    $passmd5   =  MD5 ($_POST["loginPassword"]);
    $query     =  "SELECT UserID, mail, password FROM users WHERE mail = ? AND password = ? ";
    $statement =  $connect  -> prepare( $query );
    $statement -> execute(array( $email , $passmd5 ));
    $get       =  $statement -> fetch();
    $count     = $statement  -> rowCount();
      if($count > 0){
         $_SESSION["user"] = $email;
         $_SESSION["eid"]  = $get['UserID'];
            header("location:index.php");}
              else{ $message = '<label>Wrong Data</label>'; } } }  ?>
  <!-- ./End SERVER-->
  <!-- ./head-->
    <div class="container-fluid px-3">
      <div class="row min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
          <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
            <div class="mb-5">
              <h2>مرحبا بعودتك</h2>
            </div> 
            <form class="form-validate text-right" action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">

              <div class="form-group ">
                <label class="form-label " for="loginUsername"> البريد الالكترونى</label>
                <input class="form-control text-right" name="loginUsername" type="emailuser" placeholder="gamil.com" required data-msg="Please enter your email">
              </div>

              <div class="form-group mb-12">
                <div class="row">
                  <div class="col">
                    <label class="form-label" for="loginPassword"> كلمة المرور</label>

                  </div>
                  <div class="col-auto"><a class="form-text small" href="#" >هل نسيت كلمة المرور؟</a></div>
                </div>
                <input class="form-control" name="loginPassword" placeholder="*****" type="password" required data-msg="Please enter your password">
              </div>
              
              <div class="form-group mb-4">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="loginRemember" type="checkbox">
                  <label class="custom-control-label text-muted" for="loginRemember"> <span class="text-sm">تذكرني   </span></label>
                </div>
              </div>

              <!-- Submit-->
              <button type="submit" class="btn btn-lg btn-block btn-primary">تسجيل الدخول</button>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
              <button class="btn btn btn-outline-primary btn-block btn-social mb-3"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>الاتصال <span class="d-none d-sm-inline">مع Facebook</span></button>
              <button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>الاتصال <span class="d-none d-sm-inline">في  Google</span></button>
                <hr class="my-4">
                <p class="text-center"><small class="text-muted text-center">لا تملك حسابا حتى الآن؟ <a href="signup.php">سجل               </a></small></p>
            </form><a class="close-absolute mr-md-5 mr-xl-6 pt-5" href=""> 
              <svg class="svg-icon w-3rem h-3rem">
                <use xlink:href="#close-1"> </use>
              </svg></a>
          </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
          <!-- Image-->
          <div class="bg-cover h-100 mr-n3" style="background-image: url(styles/img/log/2.jpg);"></div>
        </div>
      </div>
    </div>
  </body>
</html>
