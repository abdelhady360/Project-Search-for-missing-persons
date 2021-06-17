<?php
  session_start();
// pageTitle
$pageTitle ='Login';
// ./pageTitle
  if(isset($_SESSION["username"])){ header("location:dashboard.php");}
// include
  include 'includes/templates/login/head.php'; 
  include 'conn.php';
// ./include  
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // start SERVER
    if(empty($_POST["email"]) || empty($_POST["pass"])) {
      $message = ' <div class="alert alert-danger text-center" role="alert"> عفواً كلمة المرور خطاء ! </div>';
        echo $message; }
      else{
            $email   =  $_POST["email"];
            $passmd5 =  MD5($_POST["pass"]);
            $query   =  " SELECT
                            UserID , mail, password ,fullname
                          FROM 
                            users 
                          WHERE
                            mail = ? 
                          AND
                            password = ? 
                          AND
                            group_id = 1
                          LIMIT  1";
              $statement   =  $connect->prepare($query);
              $statement   -> execute(array($email,$passmd5));
              $row         =  $statement -> fetch();
              $count       = $statement  -> rowCount();
                    if($count > 0){
                      $_SESSION["username"] = $email;
                      $_SESSION["ID"]       = $row['UserID'];
                      $_SESSION["name"]     = $row['fullname'];
                        header("location:dashboard.php"); }
                         else{ $message = '<label>Wrong Data</label>'; } } }// End SERVER   ?>

  <div class="login-logo">
    <a href=""><b>Admin</b>login</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"> مرحبا بعودتك </p>
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder=" البريد الالكتروني " required='required'>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
        <br>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder=" كلمة المرور " >
        <span class="glyphicon  form-control-feedback">***</span>
      </div>
      <div class="row">
        <!-- /.col -->
          <br>
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">تسجيل الدخول</button>
          <br>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php include 'includes/templates/login/footer.php'; ?>
