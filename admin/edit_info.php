<?php 
//  session star
  session_start();
// ./session star

// SESSION
    if(isset($_SESSION["username"])){
// ./SESSION

// pageTitle
  $pageTitle ='بياناتي';
// ./pageTitle

// include
      include 'init.php'; 
      include $conn;
// ./include

// get doo 
$doo = isset($_GET['doo']) ? $_GET['doo'] : 'edit';
// edit
  if($doo == 'edit'){ 

    $userid    = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) :0;
    $query     = " SELECT * FROM users WHERE userid = '$userid' LIMIT  1";
    $statement = $connect->prepare($query);
    $statement->execute(array($userid));
    $row       = $statement -> fetch();
    $count     = $statement->rowCount();

  if($statement->rowCount() > 0){ include 'includes/templates/re_edit_info.php'; }
    else { echo 'You are not authorized';} }
// ./edit

// update
  elseif ($doo == 'update'){

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//get
    $id         =$_POST['userid'];
    $FullName   =$_POST['FullName'];
    $UserName   =$_POST['UserName'];
    $Email      =$_POST['Email'];
// PASS TRICK 
    $pass='';
    if(empty($_POST['newPassword'])){
      $pass=$_POST['hidPassword']; }
        else { $pass =MD5($_POST['newPassword']); }

/////////////////////////////
//////////  Terms  //////////
////////////////////////////

    // $formerror=array();

    // if(strlen($FullName)>20){
    //   $formerror[]= '<div class="alert alert-warning text-center" role="alert"> يجب ان يقل الاحرف عن 20 احرف </div>';}
    // if(strlen($FullName)<4){
    //   $formerror[]= '<div class="alert alert-warning text-center" role="alert"> يجب ان يزيد الاحرف عن 4 احرف </div>';} 
    // if(empty($FullName)){
    //   $formerror[]= '<div class="alert alert-warning text-center" role="alert"> عفوا يرجا حقل اسم المستخدم فارغ </div>';}    
    // if(empty($UserName)){
    //   $formerror[]= '<div class="alert alert-warning text-center" role="alert"> عفوا يرجا حقل الاسم  فارغ </div>';}    
    // if(empty($Email)){
    //   $formerror[]= '<div class="alert alert-warning text-center" role="alert"> عفوا يرجا حقل الاميل فارغ </div>';}
    // if(strlen($pass) < 4){
    //   $formerror[]= '<div class="alert alert-warning text-center" role="alert"> يجب ان لا يقل الباسورد  عن 4 ارقام  </div>';} 
    // foreach($formerror as $error){
    //   echo $error . '<br>';
    // }

//////////////////////////////////////////

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>تعديل بياناتي</h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
          </div>
          <!-- /.box-header -->
    <?php

if (empty($formerror)){
  $query     ="UPDATE users SET username = ?, mail = ?, fullname = ?, password = ? WHERE UserID = ?";
  $statement = $connect->prepare($query);
  $statement->execute(array($UserName, $Email, $FullName, $pass, $id));
  $count     = $statement->rowCount(); ?>

    <script>
    setTimeout(function (){ window.location.href= "edit_info.php?doo=edit&id=<?php echo $_SESSION['ID'] ?>";});
    </script>

<?php } }
  else { echo 'sorry'; } }
// include// include
  include 'includes/templates/footer.php'; }
// End include
else{	header('location:index.php'); }  
?>
