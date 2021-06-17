
<?php

$getUsr  = "SELECT * from users where mail = ?";
$get     = $connect->prepare($getUsr);
$get     ->execute(array($sessinoUser));
$info    = $get -> fetch(); ?>

<br><br><br>
<!-- hea-->
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
              </div>
              <ul class="nav nav-tabs " id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">الاعدادات</a>
            </li>
            <li class="nav-item">
                  <a class=" nav-link" id="profile-tab" data-toggle="tab" href="?tab=show" role="tab" aria-controls="profile" aria-selected="false">بلاغاتي</a>
            </li>
              </ul>              
    <div class="tab-content pt-3 " id="myTabContent">
      <div  class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
<?php
  if(!empty($formErrors)){
    foreach ($formErrors as $error){
      echo"<p class='alert alert-warning'> $error</p>"."<br>"; }
        if(isset($Mseglog)){ echo"<p class='alert alert-success'> $Mseglog</p>"."<br>" ;}}
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
                              <input class="form-control " type="text" name="fullname" placeholder="John Smith" value="<?php echo $info['fullname'];?> " >
                              </div></div> </div>
                          <div class="col">
                            <div class="form-group">
                              <label>اسم المستخدم </label>
                              <br>
                              <input class="form-control" type="text" name="username" placeholder="@" value="<?php echo $info['username'];  ?>">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>البريد الالكتروني</label>
                              <br>
                              <input class="form-control "placeholder="Readonly input here…" readonly type="email" placeholder="@gmail.com" value="<?php echo $info['mail'];  ?>" dir(rtl)>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>  تغيير كلمة المرور</b></div>
                        <br>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>كلمة مرور الحالية</label>
                              <br>
                              <input class="form-control" name="password" type="password" placeholder="••••••">

                            </div>
                            <input type="hidden" name="hidPassword"  value="<?php echo $info['password'] ?>" required='required' >

                          </div>

                        </div>                        
                         <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>كلمة مرور الجديده</label>
                              <br>
                              <input class="form-control" name="Npassword" type="password" placeholder="••••••">
                            </div></div> </div>                          
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>تاكيد كلمة مرور جديده </label>
                              <br>
                              <input class="form-control" name="Cpasswordm" type="password" placeholder="••••••">
                            </div> </div> </div> </div></div><br><br>
                    <div class="row text-center">
                        <button class="btn btn-primary text-center btn-block" type="submit">تحديث</button>
                    </div><br></form> </div>
                <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <!-- 2 -->
    <section class="py-6">
      <div class="container">
        <div class="row mb-5">
 <?php

    foreach(getM('user_id', $info['UserID']) as $row ){ 
       // <!-- blog item-->
        echo" <div class='col-lg-4 col-sm-6 mb-4 hover-animate'>";
        echo" <div class='card shadow border-0 h-100'>";
        echo" <a href='Detailing.php?usid=".$row['id']."'>";
        echo' <img class="img-fluid card-img-top" src="admin/data/uploads/imgUser/'.$row['imgUp'].'" alt="..."/></a>';
          if($row['question'] == 'Missing'){
            echo" <span class=' p-2 mb-2 bg-danger text-white text-center'><h5 class='abdooo'>مفقوده </h5></span> "; }
            elseif($row['question'] == 'Existing'){
              echo"  <span class=' p-2 mb-2 bg-info text-white text-center'><h5 class='abdooo'> شخص ما بلغ عن وجوها </h5></span> "; }
              echo"  <div class='card-body'>";
              echo" <h5 class='my-2'>";
              echo"  <p class='p-3 mb-2 bg-light text-dark text-center'>" . $row['name'] ."</p>";
              echo" </h5>";
              echo" <p class='text-gray-500 text-sm my-3'>";
              echo '<p class="list-group-item list-group-item-action list-group-item-light">" العنوان : '.$row['Title_ll'].'"</p>';
            if( $row['Provinces'] == 1){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : القاهرة</p>";}               
            if( $row['Provinces'] == 2){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الأسكندرية</p>";}               
            if( $row['Provinces'] == 3){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : أسوان</p>";}               
            if( $row['Provinces'] == 4){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : أسيوط</p>";}               
            if( $row['Provinces'] == 5){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الأقصر</p>";}               
            if( $row['Provinces'] == 6){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : البحيرة</p>";}               
            if( $row['Provinces'] == 7){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : بني سويف</p>";}               
            if( $row['Provinces'] == 8){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : بورسعيد</p>";}               
            if( $row['Provinces'] == 9){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : جنوب سيناء</p>";}               
            if( $row['Provinces'] == 10){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الجيزة</p>";}               
            if( $row['Provinces'] == 11){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الدقهلية</p>";}               
            if( $row['Provinces'] == 12){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : دمياط</p>";}               
            if( $row['Provinces'] == 13){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : سوهاج</p>";}               
            if( $row['Provinces'] == 14){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الشرقية</p>";}               
            if( $row['Provinces'] == 15){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الغربية</p>";}               
            if( $row['Provinces'] == 16){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الفيوم</p>";}               
            if( $row['Provinces'] == 17){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : القليوبية</p>";}               
            if( $row['Provinces'] == 18){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : قنا</p>";}               
            if( $row['Provinces'] == 19){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : كفر الشيخ</p>";}               
            if( $row['Provinces'] == 20){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : مطروح</p>";}               
            if( $row['Provinces'] == 21){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : المنوفية</p>";}               
            if( $row['Provinces'] == 22){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : المنيا</p>";}               
            if( $row['Provinces'] == 23){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الوادي الجديد</p>";}               
            
//////////////////////////////////////////////////////////////////////////////////////////

          echo" <a class='btn btn-info'>".'تعديل'. "</a>";
          echo" <a class='btn btn-danger'>".'حذف'. "</a>";
          echo" </div>";
          echo" </div>";
          echo" </div>";} 
         // <!-- blog item-->
       //   <!-- blog item-->
       echo '<hr>'; ?>
 </div></div></div></div></div></div></div></div></div></div></div></div>