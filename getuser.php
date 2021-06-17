  <?php 
// Session Start
  session_start();
// ./Session Start

// SESSION USER
  if (isset($_SESSION["user"])){
// ./SESSION USER

// pageTitle
  $pageTitle ='معلوماتي الشخصية';
// ./pageTitle

// Init
  include 'init.php'; 
// ./Init

// Tab 
  $tab = isset($_GET['tab']) ? $_GET['tab'] : 'seting';
// Tab seting
    if($tab == 'seting'){ 
      $getUsr =  "SELECT * from users where mail = ?";
      $get    =  $connect -> prepare ($getUsr);
      $get    -> execute(array($sessinoUser));
      $info   =  $get     -> fetch();
  ?>
  <!--br-->
    <br><br><br>
  <!--./br-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container">
  <div class="row flex-lg-nowrap col-sm-12">
    <div class="col">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                <div class="row">
                  <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                      <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                        <img src="styles/img/avatar/users.png" while="137" height="137">
                      </div>
                    </div>
                  </div>
                  <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                      <h4 class="pt-sm-4 pb-3 mb-0 text-nowrap"><?php echo $info['fullname'];  ?></h4>
                      <p class="mb-0 text-right">@<?php echo $info['username'];  ?></p>
                      <div class="mt-2"></div></div><div>
                        <a type="button" href="sign-out.php" class="btn btn-success">تسجيل الخروج</a>
                      </div></div></div>
                  <ul class="nav nav-tabs " id="myTab" role="tablist">
                  <li class="nav-item">
                  <a class="nav-link active"  href="?seting" >الاعدادات</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link"  href="?tab=show" >بلاغاتي</a>
              </li></ul>              
            <div class="tab-content pt-3 " id="myTabContent">
            <div  class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php
                        if(!empty($formErrors)){ foreach ($formErrors as $error){ echo"<p class='alert alert-warning'> $error</p>"."<br>"; }
                        if(isset($Mseglog)){ echo"<p class='alert alert-success'> $Mseglog</p>"."<br>"; } }
                ?>
                  <form class="form"action="?tab=update" method="post">
                      <div class="row">
                        <div class="col">
                          <div class="row">
                            <div class="col">
                            <div class="row">
                              <div class="col-12 ">
                                <label>الاسم كامل</label>
                                <br>
                                <input class="form-control " type="text" name="fullname" placeholder="الاسم كامل" value="<?php echo $info['fullname'];?> " pattern=".{4,}" title="يجب ان لا يقل الاسم عن 4 احرف" required >
                                </div></div></div>
                            <div class="col">
                              <div class="form-group">
                                <label>اسم المستخدم </label>
                                <br>
                                <input class="form-control" type="text" name="username" placeholder="@" value="<?php echo $info['username'];  ?>" pattern=".{4,}" title="اسم المستخدم غير صحيح" data-msg="Please enter your name" required >
                              </div></div></div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>البريد الالكتروني</label>
                                <br>
                                <input class="form-control "placeholder="Readonly input here…" readonly type="email" placeholder="@gmail.com" value="<?php echo $info['mail'];  ?>" dir(rtl)>
                              </div> </div></div></div></div>

                            <div class="row">
                              <div class="col-12 col-sm-6 mb-3">
                                <div class="mb-2"><b> تغيير كلمة المرور</b></div>
                                <br>
                                <div class="row">
                                  <div class="col">
                                    <div class="form-group">
                                      <label>كلمة مرور الحالية</label>
                                      <br>
                                      <input class="form-control" name="password" type="password" placeholder="********">
                                    </div>
                                    <input type="hidden" name="hidPassword"  value="<?php echo $info['password'] ?>" required='required'  >
                                  </div></div>  

                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>كلمة مرور الجديده</label>
                                  <br>
                                  <input class="form-control" name="Npassword" type="password" placeholder="******">
                                </div></div></div>

                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>تاكيد كلمة مرور جديده </label>
                                  <br>
                                  <input class="form-control" name="Cpasswordm" type="password" placeholder="******">
                                </div></div></div></div></div>
                                <br><br>
                          <div class="row text-center">
                              <button class="btn btn-primary text-center btn-block" type="submit">تحديث</button>
                          </div>
                          <br>
                          </form></div></div></div></div></div></div></div></div></div></div>
  <?php } // ./Tab seting

// Tab update
  elseif ($tab == 'update') { 
    if(@$_SERVER['REQUEST_METHOD'] == 'POST'){
      $formErrors = array();
/////// get 
      $id           = $_SESSION['eid'];
      $email        = $_SESSION['user'];
      $username     = $_POST['username'];
      $fullname     = $_POST['fullname'];
      $Pass         = MD5($_POST['password']);
      $NPass        = MD5($_POST['Npassword']);
      $CPass        = MD5($_POST['Cpasswordm']);
/////// IF ERROR
    if(isset($fullname))                                 { $filterUser      = filter_var( $fullname , FILTER_SANITIZE_STRING);
    if(strlen($filterUser) < 4)                          { $formErrors[]    = '   عفوا الاسم اقل من 4 احرف ';  }}
    if(isset($username))                                 { $filterUsername  = filter_var($username, FILTER_SANITIZE_STRING);
    if(!preg_match("/^[a-zA-Z0-9]+$/", $filterUsername)) { $formErrors[]    = 'اسم المستخدم غير صحيح';  }}
    if($NPass !== $CPass)                                { $formErrors[]    = 'عفوا كلمة المرور غير  متطابقة'; }
    if ( $Pass !== $_POST['hidPassword'] )               { $formErrors[]    = 'عفوا كلمه المرور غير صالحة'; }

    if(empty($formErrors)){
      $query ="UPDATE users SET username = ?,  fullname = ?, mail = ? , password = ?  WHERE password = ? AND UserID =? ";
/////// messiage
      $statement  =  $connect->prepare($query);
      $statement  -> execute(array($username, $fullname,$email, $NPass ,$Pass, $id));
      $count      =   $statement->rowCount();
/////// ECHO MSEG
      $Mseglog    = 'تم تحديث معلوماتك'; }}
/////// ./ECHO MSEG
      $getUsr     =  "SELECT * from users where mail = ?";
      $get        =  $connect->prepare($getUsr);
      $get        -> execute(array($sessinoUser));
      $info       =  $get -> fetch(); ?>

<!-- BR-->
<br><br><br>
<!-- ./BR-->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap col-sm-12">
  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <img src="styles/img/avatar/users.png" while="137" height="137">
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-4 pb-3 mb-0 text-nowrap"><?php echo $info['fullname'];  ?></h4>
                    <p class="mb-0 text-right">@<?php echo $info['username'];  ?></p>
                    <div class="mt-2"></div></div><div>
                <a type="button" href="sign-out.php" class="btn btn-success">تسجيل الخروج</a>
                </div></div></div>
                  <ul class="nav nav-tabs " id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active"  href="?seting">الاعدادات</a>
            </li>
            <li class="nav-item">
              <a class=" nav-link"  href="?tab=show" >بلاغاتي</a>
            </li></ul>              

            <div class="tab-content pt-3 " id="myTabContent">
            <div  class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
              <?php
                  if(!empty($formErrors)){ foreach ($formErrors as $error){ echo"<p class='alert alert-warning'> $error</p>"."<br>"; } }
                  if(isset($Mseglog)){ echo"<p class='alert alert-success'> $Mseglog</p>"."<br>"; }
              ?>
                <form class="form" action="?tab=update" method="post">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                          <div class="row">

                            <div class="col-12 ">
                              <label>الاسم كامل</label>
                              <br>
                              <input class="form-control " type="text" name="fullname" placeholder="الاسم كامل" value="<?php echo $info['fullname'];?> " pattern=".{4,}" title="يجب ان لا يقل الاسم عن 4 احرف" required>
                              </div></div></div>
                          
                            <div class="col">
                              <div class="form-group">
                                <label>اسم المستخدم </label>
                                <br>
                                <input class="form-control" type="text" name="username" placeholder="@" value="<?php echo $info['username'];  ?>"  pattern=".{4,}" title=" اسم المستخدم غير صحيح" required>
                              </div></div></div>

                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>البريد الالكتروني</label>
                                  <br>
                                  <input class="form-control "placeholder="Readonly input here…" readonly type="email" placeholder="@gmail.com" value="<?php echo $info['mail'];  ?>" dir(rtl)>
                                </div> </div></div></div></div>

                        <div class="row">
                          <div class="col-12 col-sm-6 mb-3">
                            <div class="mb-2"><b>  هل تود تغير كلمة المرور</b></div>
                            <br>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label>كلمة مرور الحالية</label>
                                  <br>
                                  <input class="form-control" name="password" type="password" placeholder="••••••"></div>
                                <input type="hidden" name="hidPassword"  value="<?php echo $info['password'] ?>" required='required' >
                                </div></div>     

                         <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>كلمة مرور الحالية</label>
                              <br>
                              <input class="form-control" name="Npassword" type="password" placeholder="••••••">
                            </div></div></div>   

                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>تاكيد كلمة مرور جديده </label>
                                <br>
                                <input class="form-control" name="Cpasswordm" type="password" placeholder="••••••">
                              </div></div></div></div></div>
                          <br><br>
                        <div class="row text-center">
                            <button class="btn btn-primary text-center btn-block" type="submit">تحديث</button>
                        </div><br></form></div></div></div></div></div></div></div></div></div></div></div>
<?php }// ./Tab update

// Tab show
  elseif($tab == 'show'){ 

    $getUsr = "SELECT * from users where mail = ?";
    $get    =  $connect->prepare($getUsr);
    $get    -> execute(array($sessinoUser));
    $info   =  $get -> fetch(); ?>

<!-- BR-->
<br><br><br>
<!-- ./BR-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap col-sm-12">
<div class="col">
<div class="row">
  <div class="col mb-3">
    <div class="card">
      <div class="card-body">
        <div class="e-profile">
          <div class="row">
            <div class="col-12 col-sm-auto mb-3">
              <div class="mx-auto" style="width: 140px;">
                <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                  <img src="styles/img/avatar/users.png" while="137" height="137">
                </div>
              </div>
            </div>
            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
              <div class="text-center text-sm-left mb-2 mb-sm-0">
                <h4 class="pt-sm-4 pb-3 mb-0 text-nowrap"><?php echo $info['fullname'];  ?></h4>
                <p class="mb-0 text-right">@<?php echo $info['username'];  ?></p>
                <div class="mt-2">
                </div>
              </div>
            </div>
            <div>
            <a type="button" href="sign-out.php" class="btn btn-success">تسجيل الخروج</a>
            </div>
          </div>
          <ul class="nav nav-tabs " id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link "  href="?seting">الاعدادات</a>
         </li>
        <li class="nav-item">
            <a class=" nav-link active"  href="?tab=show" >بلاغاتي</a>
        </li>
          </ul>              
<!-- 2 -->
<section class="py-6">
  <div class="container">
    <div class="row mb-5">

 <?php
  foreach(getM('user_id', $info['UserID']) as $row ){ 
 // <!-- blog item-->
    echo "  <div class='col-lg-4 col-sm-6 mb-4 hover-animate'>";
    echo "  <div class='card shadow border-0 h-100'>";
    echo "  <a href='Detailing.php?usid=".$row['id']."'>";
    echo '  <img class="img-fluid card-img-top" src="admin/data/uploads/imgUser/'.$row['imgUp'].'" alt="..."/></a>';

  if($row['question'] == 'Missing'){

    echo"  <span class=' p-2 mb-2 bg-danger text-white text-center'><h5 class='abdooo'>مفقوده </h5></span> "; }

  elseif($row['question'] == 'Existing'){

      echo " <span class=' p-2 mb-2 bg-info text-white text-center'><h5 class='abdooo'> شخص ما بلغ عن وجوها </h5></span> "; }
      echo " <div class='card-body'>";
      echo " <h5 class='my-2'>";
      echo " <p class='p-3 mb-2 bg-light text-dark text-center'>" . $row['name'] ."</p>";
      echo " </h5>";
      echo " <p class='text-gray-500 text-sm my-3'>";
      echo ' <p class="list-group-item list-group-item-action list-group-item-light">" العنوان : '.$row['Title_ll'].'"</p>';

    if( $row['Provinces'] == 1)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : القاهرة</p>";}               
    if( $row['Provinces'] == 2)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الأسكندرية</p>";}               
    if( $row['Provinces'] == 3)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : أسوان</p>";}               
    if( $row['Provinces'] == 4)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : أسيوط</p>";}               
    if( $row['Provinces'] == 5)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الأقصر</p>";}               
    if( $row['Provinces'] == 6)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : البحيرة</p>";}               
    if( $row['Provinces'] == 7)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : بني سويف</p>";}               
    if( $row['Provinces'] == 8)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : بورسعيد</p>";}               
    if( $row['Provinces'] == 9)  { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : جنوب سيناء</p>";}               
    if( $row['Provinces'] == 10) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الجيزة</p>";}               
    if( $row['Provinces'] == 11) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الدقهلية</p>";}               
    if( $row['Provinces'] == 12) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : دمياط</p>";}               
    if( $row['Provinces'] == 13) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : سوهاج</p>";}               
    if( $row['Provinces'] == 14) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الشرقية</p>";}               
    if( $row['Provinces'] == 15) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الغربية</p>";}               
    if( $row['Provinces'] == 16) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الفيوم</p>";}               
    if( $row['Provinces'] == 17) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : القليوبية</p>";}               
    if( $row['Provinces'] == 18) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : قنا</p>";}               
    if( $row['Provinces'] == 19) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : كفر الشيخ</p>";}               
    if( $row['Provinces'] == 20) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : مطروح</p>";}               
    if( $row['Provinces'] == 21) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : المنوفية</p>";}               
    if( $row['Provinces'] == 22) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : المنيا</p>";}               
    if( $row['Provinces'] == 23) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الوادي الجديد</p>";}               
      
//////////////////////////////////////////////////////////////////////////////////////////

        echo " <a class='btn btn-info' href='?tab=edit&usid=".$row['id']."' >".'تعديل'. "</a>";
        echo " <a class='btn btn-danger' href='?tab=delete&usid=".$row['id']."'>".'حذف'. "</a>";
        echo " </div>";
        echo " </div>";
        echo " </div>"; }
 //   <!-- blog item-->
        echo '<hr>'; ?>
</div></div></section></div></div></div></div></div></div></div></div>

<?php }// ./Tab show

// Tab edit
  elseif ($tab == 'edit'){ 
    $usid       =   isset($_GET['usid']) && is_numeric($_GET['usid']) ? intval($_GET['usid']) :0;
    $query      =   " SELECT * FROM missing WHERE id = '$usid' LIMIT  1";
    $statement  =   $connect  -> prepare($query);
    @$statement  ->  execute(array($userid));
    $rowm       =   $statement -> fetch();
    $count      =   $statement -> rowCount();

  if ($statement->rowCount() > 0){ ?>

<!-- BR -->
<br><br>
<!-- ./BR -->
<!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
       <div class='container'>
           <h1> تعديل البيانات</h1>
      <br>
       </section>
       <!-- Main content -->
       <section class="content">
         <div class="row">
           <!-- left column -->
           <div class="col-md-12">
             <!-- general form elements -->
             <!-- general form elements -->
             <div class="box box-primary">
               <!-- /.box-header -->
               <!-- form start -->
               <form class="container"   action="?tab=updateu" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="usid" value="<?php echo $usid ?>" >
                  <div class="form-row text-right">
                    <div class="form-group col-md-12">
                      <label for="inputEmail4" class="text-right">اسم المفقود</label>
                      <input type="text" name="name" class="form-control" id="inputEmail4" value="<?php echo $rowm['name'] ?>" placeholder="" required>
                    </div>

                  </div>
                  <div class="form-group text-right">
                    <label for="inputAddress">متي تم الاختفاء</label>
                    <input type="text" name="Title_l" class="form-control" id="inputAddress"  value="<?php echo $rowm['Title_l'] ?>" placeholder="" required>
                  </div>

                <div class="text-right">
                  <label for="inputCity">رقم الهاتف</label>
                  <input type="text" name="nmpur" class="form-control" id="inputCity"  value="<?php echo $rowm['nmpur'] ?>">
                </div>

              <div class="form-group text-right">
                <label for="inputAddress2">العنوان</label>
                <input type="text"  name="Title_ll" class="form-control" id="inputAddress2" value="<?php echo $rowm['Title_ll'] ?>" placeholder="" required>
              </div>

            <div class="form-group text-right">
              <label for="exampleFormControlSelect1">المحافظه</label>
                <select class="form-control"  name="Provinces" id="exampleFormControlSelect1">
                  <option value="1" <?php if( $rowm['Provinces'] == 1){ echo 'selected';} ?> >القاهرة</option>
                  <option value="2" <?php if( $rowm['Provinces'] == 2){ echo 'selected';} ?>>الأسكندرية</option>
                  <option value="3" <?php if( $rowm['Provinces'] == 3){ echo 'selected';} ?>>أسوان</option>
                  <option value="4" <?php if( $rowm['Provinces'] == 4){ echo 'selected';} ?>>أسيوط</option>
                  <option value="5" <?php if( $rowm['Provinces'] == 5){ echo 'selected';} ?>>الأقصر</option>
                  <option value="6" <?php if( $rowm['Provinces'] == 6){ echo 'selected';} ?>>البحيرة</option>
                  <option value="7" <?php if( $rowm['Provinces'] == 7){ echo 'selected';} ?>>بني سويف</option>
                  <option value="8" <?php if( $rowm['Provinces'] == 8){ echo 'selected';} ?>>بورسعيد</option>
                  <option value="9" <?php if( $rowm['Provinces'] == 9){ echo 'selected';} ?>>جنوب سيناء</option>
                  <option value="10" <?php if( $rowm['Provinces'] == 10){ echo 'selected';} ?>>الجيزة</option>
                  <option value="11" <?php if( $rowm['Provinces'] == 11){ echo 'selected';} ?>>الدقهلية</option>
                  <option value="12" <?php if( $rowm['Provinces'] == 12){ echo 'selected';} ?>>دمياط</option>
                  <option value="13" <?php if( $rowm['Provinces'] == 13){ echo 'selected';} ?>>سوهاج</option>
                  <option value="14" <?php if( $rowm['Provinces'] == 14){ echo 'selected';} ?>>الشرقية</option>
                  <option value="15" <?php if( $rowm['Provinces'] == 15){ echo 'selected';} ?>>الغربية</option>
                  <option value="16" <?php if( $rowm['Provinces'] == 16){ echo 'selected';} ?>>الفيوم</option>
                  <option value="17" <?php if( $rowm['Provinces'] == 17){ echo 'selected';} ?>>القليوبية</option>
                  <option value="18" <?php if( $rowm['Provinces'] == 18){ echo 'selected';} ?>>قنا</option>
                  <option value="19" <?php if( $rowm['Provinces'] == 19){ echo 'selected';} ?>>كفر الشيخ</option>
                  <option value="20" <?php if( $rowm['Provinces'] == 20){ echo 'selected';} ?>>مطروح</option>
                  <option value="21" <?php if( $rowm['Provinces'] == 21){ echo 'selected';} ?>>المنوفية</option>
                  <option value="22" <?php if( $rowm['Provinces'] == 22){ echo 'selected';} ?>>المنيا</option>
                  <option value="23" <?php if( $rowm['Provinces'] == 23){ echo 'selected';} ?>>الوادي الجديد</option>
                </select>
            </div>
            <div class="form-group text-right">
              <label for="exampleFormControlSelect1">النوع</label>
              <select class="form-control"  name="nationality" id="exampleFormControlSelect1">
              <option value="Male" <?php if( $rowm['nationality'] == 'Male'){ echo 'selected';} ?>>ذكر</option>
              <option value="female" <?php if( $rowm['nationality'] == 'female'){ echo 'selected';} ?>>انثي</option>
              </select>
            </div>
            <div class="form-group text-right">
              <label for="exampleFormControlSelect1">السن</label>
              <select class="form-control" name="Age" id="exampleFormControlSelect1">
              <option value="0" <?php if( $rowm['Age'] == 0){ echo 'selected';} ?> >شاب /ة</option>
              <option value="1" <?php if( $rowm['Age'] == 1){ echo 'selected';} ?>>طفل /ة</option>
              </select>
            </div>    
            <div class="form-group text-right">
              <label for="exampleFormControlSelect1">هل تعلم مكان تواجده</label>
              <select class="form-control" name="question" id="exampleFormControlSelect1">
              <option value="Missing" <?php if( $rowm['question'] == 'Missing'){ echo 'selected';} ?> >مفقود</option>
              <option value="Existing" <?php if( $rowm['question'] == 'Existing'){ echo 'selected';} ?> >نعم اعلم</option>
              </select>
            </div>
            <div class="form-group text-right text-right">
              <label for="exampleFormControlTextarea1">معلومات اضافيه</label>
                <textarea class="form-control" name="Title_lll"  value="<?php echo $rowm['Title_lll'] ?>" id="exampleFormControlTextarea1" rows="3">
                </textarea>
            </div>
          <br>  
          <div class="text-right">
            <label for="exampleFormControlSelect1">صوره خاصه به</label>
          </div>
        <div class="custom-file ">
          <input type="file" name="imgUp" class="custom-file-input" id="customFile" value ="<?php echo $rowm['imgUp']   ?>" required>
           <label class="custom-file-label" for="customFile">صوره الشخص</label>
        </div>
        <br><br>
         <div class="text-center">
          <button type="submit" class="btn btn-primary ">نشر</button>
         </div></form></div></section><br></form></div> </div></div></section></div> </div>

<?php } else { echo 'You are not authorized'; }}// ./Tab edit

// Tab updateu
elseif($tab == 'updateu'){ 
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
// GET DATA IMGES
    $imgUserName = $_FILES['imgUp']['name'];
    $imgUserSize = $_FILES['imgUp']['size'];
    $imgUserTmp  = $_FILES['imgUp']['tmp_name'];
    $imgUserType = $_FILES['imgUp']['type'];
// Ad hoc
    $imgUserAllowExt = array("jpeg", "jpg" , "png" , "gif");
// Attracted
    $imgUserExt1 = @explode('.' , $imgUserName);
    $imgUserExt2  = @end($imgUserExt1);
    $imgUserExt13 = @strtolower($imgUserExt2);
// Manufacture
    $imgUserAvtar = rand(0, 10000000) . '_' . $imgUserName;
    move_uploaded_file($imgUserTmp, "admin\data\uploads\imgUser\\".$imgUserAvtar);
//get
    $id            = $_POST['usid'];
    $name          = $_POST['name'];
    $Title_l       = $_POST['Title_l'];
    $nmpur         = $_POST['nmpur'];
    $Title_ll      = $_POST['Title_ll'];
    $Provinces     = $_POST['Provinces'];
    $Title_lll     = $_POST['Title_lll'];
    $nationality   = $_POST['nationality'];
    $Age           = $_POST['Age'];
    $question      = $_POST['question'];
    $location1     = $imgUserAvtar;

// SQL
    $query = " UPDATE  missing SET name = ?, Title_l  = ?, nmpur = ?, Title_ll = ?, Provinces = ?, nationality = ?, Age = ?, question = ?, Title_lll = ?, imgUp =? WHERE id =? ";
// messiage
    $statement =  $connect -> prepare($query);
    $statement -> execute(array( $name, $Title_l, $nmpur, $Title_ll, $Provinces, $nationality, $Age, $question, $Title_lll, $location1, $id )); ?>
    <script>
      setTimeout(function (){ window.location.href= "getuser.php?tab=show";});
    </script> <?php } }// ./Tab updateu

// Tab delete
  elseif($tab == 'delete'){
    $userid2    =  isset($_GET['usid']) && is_numeric($_GET['usid']) ? intval($_GET['usid']) :0;
    $query2     =  " SELECT * FROM missing WHERE id = '$userid2' LIMIT  1";
    $statement  =  $connect -> prepare($query2);
    $statement  -> execute(array($userid2));
    $count      =  $statement->rowCount();

  if($statement->rowCount() > 0){

    $query3    =  "DELETE  FROM missing WHERE id = :zuserid ";
    $statement =  $connect -> prepare($query3);
    $statement -> bindParam(":zuserid" ,$userid2 );
    $statement -> execute();
  ?>
    <script>
     setTimeout(function (){ window.location.href= "getuser.php?tab=show";});
    </script> <?php } else { echo 'You are not authorized'; } }// ./Tab delete

// eND
  include $tpl . 'footer.php'; }
  else{ header('location:index.php'); } ?>
<!-- ##################################################################################################################### -->