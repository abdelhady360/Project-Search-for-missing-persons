 <?php 
 // Session Start
  session_start();
// ./Session Start

// pageTitle
  $pageTitle ='تسجيل';
// ./pageTitle

// SESSION USER
  if(isset($_SESSION["user"])){ header("location:index.php"); }
// ./SESSION USER

// Init
  include 'init.php';
// ./Init

// Start SERVER
  if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
  $formErrors   = array();
  $name         = $_POST['name'];
  $Username     = $_POST['Username'];
  $email        = $_POST['email'];
  $Password     = MD5 ( $_POST['Password'] );
  $Password2    = MD5 ( $_POST['Password2'] );

// Errors Mseg
  if (isset ( $_POST['name'] )){ $filterUser = filter_var( $_POST['name'], FILTER_SANITIZE_STRING );
  if (strlen ( $filterUser) < 4){ $formErrors[] = 'يجب ان لا يقل الاسم عن 4 احرف'; }}
  if (isset ($_POST['Username'])){ $filterUsername = filter_var( $_POST['Username'], FILTER_SANITIZE_STRING );
  if (!preg_match ("/^[a-zA-Z0-9]+$/", $filterUsername )){ $formErrors[] = 'اسم المستخدم غير صحيح';  }}
  if (isset ($_POST['email'])){ $filterEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  if (filter_var($filterEmail , FILTER_VALIDATE_EMAIL ) != true ){ $formErrors[] = 'يجب ادخال بريد الكترني صالح';  }}
  if (isset($_POST['Password']) && isset($_POST['Password2']) ){
  if (!isset($_POST['Password']) ){ $formErrors[] = 'عفوا لا يوجد كلمه مرور'; }

    $Password    = MD5 ($_POST['Password']);  $Password2   = MD5 ($_POST['Password2']);

      if ($Password !== $Password2){ $formErrors[] = 'عفوا كلمة المرور غير  متطابقة';  }}
      if (empty($formErrors)){ $Cemail = check("mail" ,"users", $email);

        $Cusername = check("mail" ,"users", $Username);

          if ($Cemail == 1){  $formErrors[] = 'البريد الالكتروني مسجل بالفعل';  }
            elseif ($Cusername == 1) {   $formErrors[] = ' اسم المستخدم هذا غير متوفر '; }
              else { $query =( "INSERT INTO users (username, password, mail, fullname, Date)
                VALUES( :zusers, :zpass, :zmail, :zfullname, now() ) " ) ;
                  // messiage
                  $statement = $connect->prepare($query);
                  $statement->execute(array(
                  'zusers'    => $Username,
                  'zpass'     => $Password,
                  'zmail'     => $email,
                  'zfullname' => $name  ));

                    $Mseglog = 'تم التسجيل بنجاح'; }}} ?>

  <!--####################################################################################################################--> 
  <br>
    <div class="container-fluid px-3">
      <div class="row min-vh-100">
        <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
          <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
            <div class="mb-4">
              <div class="" >
              <!-- <div class="alert alert-warning" > -->
                <?php
                  // formErrors
                  if(!empty($formErrors)){ foreach ($formErrors as $error){ echo"<p class='alert alert-warning'> $error</p>"."<br>"; }}
                  if(isset($Mseglog)){ echo"<p class='alert alert-success'> $Mseglog</p>"."<br>"; } 
                  // ./formErrors
                  ?>
                <!-- <div class="alert alert-warning" > -->
               </div>
              <h2>تسجيل</h2>
            </div>
            <form class="form-validate text-right"  action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">

              <div class="form-group">
                <label class="form-label"> الاسم كامل</label>
                <input class="form-control" name="name"  type="text" placeholder=" "  pattern=".{4,}" title="يجب ان لا يقل الاسم عن 4 احرف" required >
              </div>  

              <div class="form-group">
                <label class="form-label" > الاسم المستخدم</label>
                <input class="form-control" name="Username"  type="text" placeholder="@User "  pattern=".{4,}" title="اسم المستخدم غير صحيح" data-msg="Please enter your name" required >
              </div> 

              <div class="form-group">
                <label class="form-label" > البريد الالكترونى</label>
                <input class="form-control" name="email"  type="email" placeholder="gamil.com"   data-msg="Please enter your email" required >
              </div>

              <div class="form-group">
                <label class="form-label" for="loginPassword"> كلمة المرور</label>
                <input class="form-control" name="Password"  placeholder="*****" type="password"  pattern=".{6,}" minlength="6" title="يجب ان لا تحتوى كلمه المرور علي اقل 6 احرف" required >
              </div>

              <div class="form-group mb-4">
                <label class="form-label" for="loginPassword2"> تاكيد كلمة المرور</label>
                <input class="form-control" name="Password2" placeholder="*****" type="password" minlength="6"  title="يرجأ تاكيد كلمه المرور"  required >
              </div>

              <button class="btn btn-lg btn-block btn-primary" type="submit">تسجيل</button>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
                <button class="btn btn btn-outline-primary btn-block btn-social mb-3"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>الاتصال <span class="d-none d-sm-inline">مع Facebook</span></button>
              <button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>الاتصال <span class="d-none d-sm-inline">مع Google</span></button>
                <hr class="my-4">
                <p class="text-sm text-muted">بالتسجيل فإنك توافق على الدليل <a href="privacy.php">الأحكام والشروط</a> و <a href="privacy.php">سياسة الخصوصية</a>.</p>
            </form><a class="close-absolute mr-md-5 mr-xl-6 pt-5" href=""> 
                <svg class="svg-icon w-3rem h-3rem">
                  <use xlink:href="#close-1"> </use>
                </svg></a>
          </div>
        </div>
        <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
          <!-- Image-->
          <div class="bg-cover h-100 mr-n3" style="background-image: url(styles/img/log/3.jpg);"></div>
        </div>
      </div>
    </div>
  </body>
</html>