
<?php 
  session_start();
    if(isset($_SESSION["username"])){
//  Start pageTitle
$pageTitle ='المفقودين';
//  EnspageTitle
// include
      include 'init.php'; 
      include $conn;
// End include
$do = isset($_GET['do']) ? $_GET['do'] : 'Mange'; 

  if($do == 'Mange'){ // Mamge page
    $query     = " SELECT * FROM missing ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $rows      = $statement -> fetchAll();
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>المفقودين</h1>
      <?php
?>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
                <a href="MissingNew.php?do=add" class="btn btn-success">اضافه مفقود جديد <i class="fas fa-user-plus"></i></a>
            </div>
            <!-- /.box-header -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>الاسم كامل</th>
                  <th>النوع</th>
                  <th>المحافظه</th>
                  <th dir='ltr'>> تاريخ الانشاء</th>
                  <th>عرض</th>
                  <th>تعديل</th>
                  <th>حذف</th>
                </tr>
                </thead>
                <tbody>
             <?php

                foreach($rows as $row){ 

                  echo "<tr>";   
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                ####################################################################

                  if( $row["nationality"] == 'Male'){ echo "<td> <p>ذكر</p> </td>"; }               
                  if( $row["nationality"] == 'female'){  echo "<td> <p>انثي</p> </td>"; } 
               ############################################################################
                  if( $row['Provinces'] == 1){ echo "<td> <p>القاهرة</p> </td>";}  
                  if( $row['Provinces'] == 2){ echo "<td> <p>الأسكندرية</p> </td>";}               
                  if( $row['Provinces'] == 3){ echo "<td> <p>أسوان</p> </td>";}               
                  if( $row['Provinces'] == 4){ echo "<td> <p>أسيوط</p> </td>";}               
                  if( $row['Provinces'] == 5){ echo "<td> <p>الأقصر</p> </td>";}               
                  if( $row['Provinces'] == 6){ echo "<td> <p>البحيرة</p> </td>";}               
                  if( $row['Provinces'] == 7){ echo "<td> <p>بني سويف</p> </td>";}               
                  if( $row['Provinces'] == 8){ echo "<td> <p>بورسعيد</p> </td>";}               
                  if( $row['Provinces'] == 9){ echo "<td> <p>جنوب سيناء</p> </td>";}               
                  if( $row['Provinces'] == 10){echo "<td> <p>الجيزة</p> </td>";}               
                  if( $row['Provinces'] == 11){ echo "<td> <p>الدقهلية</p> </td>";}               
                  if( $row['Provinces'] == 12){ echo "<td> <p>دمياط</p> </td>";}               
                  if( $row['Provinces'] == 13){echo "<td> <p>سوهاج</p> </td>";}               
                  if( $row['Provinces'] == 14){ echo "<td> <p>الشرقية</p> </td>";}               
                  if( $row['Provinces'] == 15){echo "<td> <p>الغربية</p> </td>";}               
                  if( $row['Provinces'] == 16){ echo "<td> <p>الفيوم</p> </td>";}               
                  if( $row['Provinces'] == 17){echo "<td> <p>القليوبية</p> </td>";}               
                  if( $row['Provinces'] == 18){ echo "<td> <p>قنا</p> </td>";}               
                  if( $row['Provinces'] == 19){ echo "<td> <p>كفر الشيخ</p> </td>";}               
                  if( $row['Provinces'] == 20){echo "<td> <p>مطروح</p> </td>";}               
                  if( $row['Provinces'] == 21){ echo "<td> <p>المنوفية</p> </td>";}               
                  if( $row['Provinces'] == 22){ echo "<td> <p>المنيا</p> </td>";}               
                  if( $row['Provinces'] == 23){echo "<td> <p>الوادي الجديد</p> </td>";}               
               ##################################################################################
                  echo "<td dir='ltr'>" . $row['add_date'] . "</td>";
                  echo "<td>   <a class='btn btn-info' href='MissingNew.php?do=show&usid=".$row['id']."'>عرض <i class='fas fa-eye'></i></a>  </td>";
                  echo "<td>   <a class='btn btn-primary' href='MissingNew.php?do=edit&usid=".$row['id']."'>تعديل <i class='fas fa-user-edit'></i></a>  </td>";
                  echo "<td>   <a class='btn btn-danger' href='MissingNew.php?do=delete&usid=".$row['id']."'>حذف <i class='fas fa-trash-alt'></i></a>  </td>";
                  ?>
                  <?php
                  echo "</tr>"; } ?>    
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  }elseif(@$do == 'add') { // add page
    ?>
    <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <h1>مفقود جديد</h1>
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
               <form   action="?do=inssert" method="POST" enctype="multipart/form-data">
                 <div class="box-body">
                   <div class="form-group">
                     <label for="exampleInputEmail1">الاسم الاول</label>
                     <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="الاسم كامل" required="required">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputPassword1">وقت الاختفاء</label>
                     <input type="text" name="Title_l" class="form-control" id="exampleInputPassword1" placeholder="الاربعاء 5-25-2021" required="required">
                   </div>                
                   <div class="form-group">
                     <label for="exampleInputPassword1">رقم الهاتف</label>
                     <input type="tel" name="nmpur" class="form-control" id="exampleInputPassword1" placeholder="رقم الهاتف" required="required">
                   </div>
                    <div class="form-group">
                     <label for="exampleInputPassword1">العنوان</label>
                     <input type="text" name="Title_ll" class="form-control" id="exampleInputPassword1" placeholder="العنوان" required="required">
                   </div>
                     <div class="form-group text-right">
                       <label for="exampleFormControlSelect1">المحافظه</label>
                       <select class="form-control" name="Provinces" id="exampleFormControlSelect1">
                           <option value="1">القاهرة     </option>
                           <option value="2">الأسكندرية  </option>
                           <option value="3">أسوان      </option>
                           <option value="4">أسيوط      </option>
                           <option value="5">الأقصر      </option>
                           <option value="6">الأقصر      </option>
                           <option value="7">البحيرة    </option>
                           <option value="8">بني سويف   </option>
                           <option value="9">بورسعيد    </option>
                           <option value="10">جنوب سيناء </option>
                           <option value="11">الجيزة     </option>
                           <option value="12">الدقهلية   </option>
                           <option value="13">دمياط      </option>
                           <option value="14">سوهاج      </option>
                           <option value="15">سوهاج      </option>
                           <option value="16">الشرقية    </option>
                           <option value="17">الغربية    </option>
                           <option value="18">الفيوم     </option>
                           <option value="29">القليوبية  </option>
                           <option value="20">قنا        </option>
                           <option value="21">كفر الشيخ  </option>
                           <option value="22">مطروح      </option>
                           <option value="23">المنوفية   </option>
                           <option value="24">المنيا        </option>
                           <option value="25">الوادي الجديد</option>
                       </select>
                     </div>
                   <div class="form-group text-right">
                       <label for="exampleFormControlSelect1">النوع</label>
                       <select class="form-control" name="nationality" id="exampleFormControlSelect1">
                         <option value="Male">ذكر</option>
                         <option value="female">انثي</option>
                       </select>
                     </div>                 
                     <div class="form-group text-right">
                       <label for="exampleFormControlSelect1">السن</label>
                       <select class="form-control" name="Age" id="exampleFormControlSelect1">
                         <option value="0">شاب /ة</option>
                         <option value="1">طفل /ة</option>
                       </select>
                     </div> 
                     <div class="form-group text-right">
                       <label for="exampleFormControlSelect1">هل تعلم مكان تواجده</label>
                       <select class="form-control" name="question" id="exampleFormControlSelect1">
                         <option value="Missing">مفقود</option>
                         <option value="Existing">نعم اعلم</option>
                       </select>
                     </div> 
                     <div class="form-group text-right">
                       <label for="exampleFormControlSelect1">الاعضاء</label>
                       <select class="form-control" name="user_id" id="exampleFormControlSelect1">
                       <option value='0'> اختار  </option>;
                         <?php  
                         $query  = " SELECT * FROM users";
                         $userss = $connect->prepare($query);
                         $userss->execute();
                         $row    = $userss -> fetchAll();
                         foreach($row as $user){
                           echo "<option value='" .$user['UserID']. "'> " .$user['fullname']. "</option>"; } ?>
                       </select> </div>
                     <div class="form-group">
                       <label for="exampleFormControlTextarea1">معلومات اضافية</label>
                       <textarea class="form-control" name="Title_lll" id="exampleFormControlTextarea1" rows="2"></textarea>
                     </div>
                   <div class="form-group">
                     <label for="exampleInputFile">صوره الخاصه به</label>
                     <input type="file" name="imgUp" id="exampleInputFile" required="required">
                   </div> </div>
                 <!-- /.box-body -->
                 <div class="box-footer">
                   <button type="submit" class="btn btn-primary">اضافه <i class="fas fa-user-plus"></i></button>
                 </div></form> </div>
             <!-- /.box -->
             </div></div></section></div>
   <?php }
  elseif(@$do == 'inssert') { // inssert page
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $imgUserName     = $_FILES['imgUp']['name'];
      $imgUserSize     = $_FILES['imgUp']['size'];
      $imgUserTmp      = $_FILES['imgUp']['tmp_name'];
      $imgUserType     = $_FILES['imgUp']['type'];
      $imgUserAllowExt = array("jpeg", "jpg" , "png" , "gif");

      $imgUserExt1    = @explode('.' , $imgUserName);
      $imgUserExt2    = @end($imgUserExt1);
      $imgUserExt13   = @strtolower($imgUserExt2);

      $name           = $_POST['name'];
      $Title_l        = $_POST['Title_l'];
      $nmpur          = $_POST['nmpur'];      
      $Title_ll       = $_POST['Title_ll'];  
      $Provinces      = $_POST['Provinces'];
      $Title_lll      = $_POST['Title_lll'];
      $nationality    = $_POST['nationality'];
      $Age            = $_POST['Age'];
      $question       = $_POST['question'];
      $user_id        = $_POST['user_id'];

      $errorMas       = array();

      if(empty($name))     {$errorMas[]  = 'حقل الاسم فارغ ' ;}      
      if(empty($Title_l))  {$errorMas[]  = 'حقل وقت الاختفاء فارغ ' ;}      
      if(empty($nmpur))    {$errorMas[]  = 'حقل رقم الهاتف فارغ ' ;}      
      if(empty($Title_ll)) {$errorMas[]  = 'حقل العنوان فارغ ' ;}      
      if($user_id == 0)    {$errorMas[]  = 'يجب تحديد مستخدم ' ;}
        foreach($errorMas as $mas){ echo '<div class="alert alert-warning text-left" role="alert">'. $mas .'</div>';  ?>

        <script>  setTimeout(function (){ window.location.href= "MissingNew.php?do=add";},2000); </script>
    <?php }

      if(empty($errorMas)){

       $imgUserAvtar = rand(0, 10000000) . '_' . $imgUserName;
        move_uploaded_file($imgUserTmp, "data\uploads\imgUser\\" .$imgUserAvtar);
       $query =( 
        "INSERT INTO missing (name, Title_l, nmpur, Title_ll, Provinces, Title_lll, nationality, Age, question,add_date,user_id ,imgUp )
                   VALUES( :z1, :z2, :z3, :z4, :z5, :z6, :z7, :z8, :z9, now(), :z10 , :z11 ) " ) ;
    // messiage
       $statement = $connect->prepare($query);
       $statement->execute(array(
         'z1'  => $name,
         'z2'  => $Title_l,
         'z3'  => $nmpur,
         'z4'  => $Title_ll,
         'z5'  => $Provinces,
         'z6'  => $Title_lll,
         'z7'  => $nationality,
         'z8'  => $Age,
         'z9'  => $question,
         'z10' => @$user_id,
         'z11' => $imgUserAvtar
          ));  ?>
    <script> setTimeout(function (){ window.location.href= "MissingNew.php?do=Mange";}); </script>
<?php  }} } 
  elseif($do == 'edit') { // edit page
    $usid      = isset($_GET['usid']) && is_numeric($_GET['usid']) ? intval($_GET['usid']) :0;
    $query     =  "SELECT * FROM missing WHERE id = '$usid' LIMIT  1";
    $statement =  $connect->prepare($query);
    $statement->  execute(array($userid));
    $rowm      =  $statement -> fetch();
    $count     =  $statement->rowCount();
  
  if(@$statement->rowCount() > 0){ ?>
      <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <h1>مفقود جديد</h1>
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
                 <form   action="?do=update" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="usid" value="<?php echo $usid ?>" >
                   <div class="box-body">
                     <div class="form-group">
                       <label for="exampleInputEmail1">الاسم الاول</label>
                       <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="الاسم كامل" value="<?php echo $rowm['name'] ?>" required="required">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputPassword1">وقت الاختفاء</label>
                       <input type="text" name="Title_l" class="form-control" id="exampleInputPassword1" placeholder="الاربعاء 5-25-2021"  value="<?php echo $rowm['Title_l'] ?>" required="required">
                     </div>                
                     <div class="form-group">
                       <label for="exampleInputPassword1">رقم الهاتف</label>
                       <input type="tel" name="nmpur" class="form-control"  id="phone" placeholder="رقم الهاتف" value="<?php echo $rowm['nmpur'] ?>" required="required">
                     </div>
                      <div class="form-group">
                       <label for="exampleInputPassword1">العنوان</label>
                       <input type="text" name="Title_ll" class="form-control" id="exampleInputPassword1" placeholder="العنوان" value="<?php echo $rowm['Title_ll'] ?>" required="required">
                     </div>
                       <div class="form-group text-right">
                         <label for="exampleFormControlSelect1">المحافظه</label>
                         <select class="form-control" name="Provinces" value="">
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
                         <select class="form-control" name="nationality" >
                           <option value="Male" <?php if( $rowm['nationality'] == 'Male'){ echo 'selected';} ?>>ذكر</option>
                           <option value="female" <?php if( $rowm['nationality'] == 'female'){ echo 'selected';} ?>>انثي</option>
                         </select>
                       </div>                 
                       <div class="form-group text-right">
                         <label for="exampleFormControlSelect1">السن</label>
                         <select class="form-control" name="Age" >
                           <option value="0" <?php if( $rowm['Age'] == 0){ echo 'selected';} ?> >شاب /ة</option>
                           <option value="1" <?php if( $rowm['Age'] == 1){ echo 'selected';} ?>>طفل /ة</option>
                         </select>
                       </div> 
                       <div class="form-group text-right">
                         <label for="exampleFormControlSelect1">هل تعلم مكان تواجده</label>
                         <select class="form-control" name="question" >
                           <option value="Missing" <?php if( $rowm['question'] == 'Missing'){ echo 'selected';} ?> >مفقود</option>
                           <option value="Existing" <?php if( $rowm['question'] == 'Existing'){ echo 'selected';} ?> >نعم اعلم</option>
                         </select>
                       </div> 
  
                       <div class="form-group text-right">
                         <label for="exampleFormControlSelect1">الاعضاء</label>
                         <select class="form-control" name="user_id"  >
                         <option value='0'> اختار  </option>;
                           <?php  
                           $query  = " SELECT * FROM users";
                           $userss = $connect->prepare($query);
                           $userss ->execute();
                           $row    = $userss -> fetchAll();
                           foreach($row as $user){
                            echo "<option value='" .$user['UserID']. "'"; 
                           if( $rowm['user_id'] == $user['UserID']){ echo 'selected';}  echo ">" .$user['fullname']. "</option>";  } ?>
                         </select>
                       </div>
                       <div class="form-group">
                         <label for="exampleFormControlTextarea1">معلومات اضافية</label>
                         <textarea class="form-control" name="Title_lll"><?php echo $rowm['Title_lll'] ?>  </textarea>
                       </div>
                     <div class="form-group">
                       <label for="exampleInputFile">صوره الخاصه به</label>
                       <input type="file" name="imgUp"  id="exampleInputFile" required="required">
                     </div>
                   </div>
                   <!-- /.box-body -->
                   <div class="box-footer">
                     <button type="submit" class="btn btn-primary">ارسال</button>
                   </div> </form></div></div></div></section></div>
 <?php }
    else {echo 'You are not authorized'; } }
     elseif ($do == 'update') { // Update page

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $imgUserName = $_FILES['imgUp']['name'];
        $imgUserSize = $_FILES['imgUp']['size'];
        $imgUserTmp  = $_FILES['imgUp']['tmp_name'];
        $imgUserType = $_FILES['imgUp']['type'];
        $imgUserAllowExt = array("jpeg", "jpg" , "png" , "gif");

        $imgUserExt1 = @explode('.' , $imgUserName);
        $imgUserExt2  = @end($imgUserExt1);
        $imgUserExt13 = @strtolower($imgUserExt2);

        $imgUserAvtar = rand(0, 10000000) . '_' . $imgUserName;
          move_uploaded_file($imgUserTmp, "data\uploads\imgUser\\" .$imgUserAvtar);
    
      //get
      $id          = $_POST['usid'];
      $name        = $_POST['name'];
      $Title_l     = $_POST['Title_l'];
      $nmpur       = $_POST['nmpur'];
      $Title_ll    = $_POST['Title_ll']; 
      $Provinces   = $_POST['Provinces'];
      $nationality = $_POST['nationality'];
      $Age         = $_POST['Age'];      
      $question    = $_POST['question'];
      $Title_lll   = $_POST['Title_lll'];
      $user_id     = $_POST['user_id'];
      $location1   = $imgUserAvtar;

      $query ="UPDATE 
                        missing 
                    SET
                        name          = ?,
                        Title_l       = ?,
                        nmpur         = ?,
                        Title_ll      = ?,
                        Provinces     = ?,
                        nationality   = ?,
                        Age           = ?,
                        question      = ?,
                        Title_lll     = ?,
                        user_id       = ?,
                        imgUp         =?
                      WHERE 
                        id            = ?";
    // messiage
    $statement = $connect->prepare($query);
    $statement ->execute(array($name,$Title_l, $nmpur, $Title_ll, $Provinces, $nationality, $Age, $question, $Title_lll, $user_id, $location1, $id));
    $count     = $statement->rowCount(); ?>
    <script> setTimeout(function (){ window.location.href= "MissingNew.php?do=Mange";}); </script>
    <?php   } }

    elseif($do == 'delete') { // delete page

    $userid2   = isset($_GET['usid']) && is_numeric($_GET['usid']) ? intval($_GET['usid']) :0;
    $query2    = " SELECT * FROM missing WHERE id = '$userid2' LIMIT  1";
    $statement = $connect->prepare($query2);
    $statement-> execute(array($userid2));
    $count     = $statement->rowCount();
  
    if($statement->rowCount() > 0){
  
      $query3      = "DELETE  FROM missing WHERE id = :zuserid ";
      $statement   = $connect->prepare($query3);
      $statement  -> bindParam(":zuserid" ,$userid2 );
      @$statement -> execute(); ?>
      <script> setTimeout(function (){ window.location.href= "MissingNew.php?do=Mange";}); </script>
      <?php  }
    else { echo 'You are not authorized'; }} 

    elseif($do == 'show') { // show page
      include 'info_absentee.php'; }
  
  else { echo 'You are not authorized'; }
    //  include
    include $tpl . 'footer.php';
    // not include
   } else{ header('location:index.php'); }
exit();
	?>