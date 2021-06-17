<?php 
  session_start();
    if(isset($_SESSION["username"])){
// not include
  $notSmallBoxes ='';
// End not include 
//  Start pageTitle
$pageTitle ='المستخدمين';
//  EnspageTitle
// include
      include 'init.php'; 
      include $conn;
// End include
$do = isset($_GET['do']) ? $_GET['do'] : 'Mange'; 
  if($do == 'Mange'){ // Mamge page
    include 'includes/templates/show_users.php';}

  elseif($do == 'add') { // add page
    include 'includes/templates/add_users.php';}

  elseif($do == 'edit') { // edit page
    $userid    = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) :0;
    $query     = " SELECT * FROM users WHERE userid = '$userid' LIMIT  1";
    $statement = $connect->prepare($query);
    $statement ->execute(array($userid));
    $row       = $statement -> fetch();
    $count     = $statement->rowCount();
  
    if($statement->rowCount() > 0){
      include 'includes/templates/edit_user.php';}
    else { echo 'You are not authorized'; } }

    elseif(@$do == 'inssert') { // inssert page
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //get
      @$FullName   =@$_POST['FullName'];
      @$UserName   =@$_POST['UserName'];
      @$Pass       = $_POST['password'];
      @$Email      =@$_POST['Email'];
      @$PassH       = MD5($_POST['password']);
      @$group_id       = $_POST['group_id'];

      $c = check("username" ,"users", $UserName);
      $cf = check("mail" ,"users", $Email);
      if($c == 1){ ?>

<div class="alert alert-warning text-left" role="alert"> عفوا اسم المستخد مستخدم من قبل </div>
       <?php
          include 'includes/templates/show_users.php';
      }elseif($cf ==1) { ?>
<div class="alert alert-warning text-left" role="alert"> عفوا البريد الالكتروني مستخدم من قبل </div>
        <?php
          include 'includes/templates/show_users.php';  }
      else{
   $query =( 
      "INSERT INTO users (username, password, mail, fullname, group_id  , Date)
                  VALUES( :zusers, :zpass, :zmail, :zfullname, :zgroup_id , now() ) " ) ;
        // messiage
        $statement = $connect->prepare($query);
        $statement->execute(array(
          'zusers'    => $UserName,
          'zpass'     => $PassH,
          'zmail'     => $Email,
          'zfullname' => $FullName,
          'zgroup_id' => $group_id
        ));
    include 'includes/templates/show_users.php'; } }}  
  elseif ($do == 'update') { // Update page
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //get
      $id         =$_POST['userid'];
      $FullName   =$_POST['FullName'];
      $UserName   =$_POST['UserName'];
      $Email      =$_POST['Email'];
      @$group_id       = $_POST['group_id'];

      // PASS TRICK 
      $pass='';
    if(empty($_POST['newPassword'])){
      $pass=$_POST['hidPassword']; }
        else { @$pass =MD5($_POST['newPassword']); }
  
  if (empty($formerror)){
    $query ="UPDATE users SET username = ?, mail = ?, fullname = ?, password = ?, group_id = ? WHERE UserID = ?";
    // messiage
    $statement = $connect->prepare($query);
    $statement ->execute(array($UserName, $Email, $FullName, $pass, $group_id , $id));
    $count     = $statement->rowCount();  ?>
    <script> setTimeout(function (){ window.location.href= "users.php";}); </script>
    <?php   } } 
      else { echo 'sorry'; }
     }
     elseif($do == 'delete') { // add page
      $userid     = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) :0;
      $query      = " SELECT * FROM users WHERE userid = '$userid' LIMIT  1";
      $statement  = $connect->prepare($query);
      $statement -> execute(array($userid));
      $count      = $statement->rowCount();
    
      if($statement->rowCount() > 0){
    
        $query     = "DELETE  FROM users WHERE UserID = :zuserid ";
        $statement = $connect->prepare($query);
        $statement ->bindParam(":zuserid" ,$userid );
        $statement->execute();
        include 'includes/templates/show_users.php'; }
      else { echo 'You are not authorized'; } }
  
  else { echo 'You are not authorized'; }
    //  include
    include $tpl . 'footer.php';
    // not include
  }
else{ header('location:index.php'); }
	?>