  <!-- head-->
  <?php
    session_start();
// PageTitle
$pageTitle ='  التفصيل  ';
// ./PageTitle

include 'init.php';

$usid = isset($_GET['usid']) && is_numeric($_GET['usid']) ? intval($_GET['usid']) :0;
$query = " SELECT * FROM missing WHERE id = ?";

$statement = $connect->prepare($query);
$statement->execute(array($usid));
$rowm = $statement -> fetch(); ?>
  <!-- ./head-->
  <section class="d-flex align-items-center dark-overlay bg-cover" style="background-image: url(styles/img/nav/02.jpg);">
      <div class="container py-6 py-lg-7 text-white overlay-content text-center"> 
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <h4 class="display-4 font-weight-bold text-shadow">المزيد من المعلومات</h4>
            <p class="text-lg text-shadow">ساعدنا لتوصيلهم لاهلهم ...</p>
          </div>
        </div>
      </div>
    </section>
  <br>
  <div class="container">
<br>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div class="progress" style="height: 2px;">
  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<?php
    echo' <div class="card-body">';
      if($rowm['question'] == 'Missing'){
        echo"  <span class=' badge badge-danger'><h5 class='abdooo'>مفقوده </h5></span> ";}
      elseif($rowm['question'] == 'Existing'){
        echo"  <span class='badge badge-info'><h5 class='abdooo'> شخص ما بلغ عن وجوها </h5></span> "; }
//  class='list-group-item list-group-item-info'
//  class='list-group-item list-group-item-light'
        echo" <br>";
        echo" <br>";
        echo" <p class='list-group-item list-group-item-action list-group-item-info'><b> الاسم : </b>".$rowm["name"]."</p>";
        echo" <p class='list-group-item list-group-item-action list-group-item-light'><b>وقت الاختفاء :</b> " .$rowm["Title_l"]."</p>";
        echo" <p class='list-group-item list-group-item-action list-group-item-info'><b>رقم الهاتف :</b> ".$rowm["nmpur"]."</p>";
        echo" <p class='list-group-item list-group-item-action list-group-item-light'><b>العنوان : </b>".$rowm["Title_ll"]."</p>";
             
             if( $rowm['Provinces'] == 1){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> القاهرة</p>";}               
             if( $rowm['Provinces'] == 2){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الأسكندرية</p>";}               
             if( $rowm['Provinces'] == 3){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> أسوان</p>";}               
             if( $rowm['Provinces'] == 4){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة : </b>أسيوط</p>";}               
             if( $rowm['Provinces'] == 5){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الأقصر</p>";}               
             if( $rowm['Provinces'] == 6){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> البحيرة</p>";}               
             if( $rowm['Provinces'] == 7){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> بني سويف</p>";}               
             if( $rowm['Provinces'] == 8){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> بورسعيد</p>";}               
             if( $rowm['Provinces'] == 9){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> جنوب سيناء</p>";}               
             if( $rowm['Provinces'] == 10){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الجيزة</p>";}               
             if( $rowm['Provinces'] == 11){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الدقهلية</p>";}               
             if( $rowm['Provinces'] == 12){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> دمياط</p>";}               
             if( $rowm['Provinces'] == 13){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> سوهاج</p>";}               
             if( $rowm['Provinces'] == 14){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الشرقية</p>";}               
             if( $rowm['Provinces'] == 15){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>الغربية</p>";}               
             if( $rowm['Provinces'] == 16){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الفيوم</p>";}               
             if( $rowm['Provinces'] == 17){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> القليوبية</p>";}               
             if( $rowm['Provinces'] == 18){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة </b>: قنا</p>";}               
             if( $rowm['Provinces'] == 19){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> كفر الشيخ</p>";}               
             if( $rowm['Provinces'] == 20){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> مطروح</p>";}               
             if( $rowm['Provinces'] == 21){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> المنوفية</p>";}               
             if( $rowm['Provinces'] == 22){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> المنيا</p>";}               
             if( $rowm['Provinces'] == 23){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الوادي الجديد</p>";}               
             
//////////////////////////////////////////////////////////////////////////////////////////
            if( $rowm["nationality"] == 'Male'){  echo"  <p  class='list-group-item list-group-item-action list-group-item-light'><b> النوع :</b> ذكر </p>";}               
            if( $rowm["nationality"] == 'female'){  echo"  <p  class='list-group-item list-group-item-action list-group-item-light'><b>النوع :</b> انثي </p>";}   
////////////////////////////////////////////////////////////////////////////////////////////
            if( $rowm["Age"] == 0 ){  echo"  <p class='list-group-item list-group-item-action list-group-item-info'><b> السن :</b> شاب /ة </p>";}   
            if( $rowm["Age"] == 1 ){  echo"  <p class='list-group-item list-group-item-action list-group-item-info'><b>السن :</b> طفل /ة </p>";}   

             echo" <p class='list-group-item list-group-item-action list-group-item-light'><b>معلومات اضافية :</b> ".$rowm["Title_lll"]."</p>";
             echo' </div>'; ?>
      <div class="progress" style="height: 2px;">
  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
    </div>
  </div>
  <div class=" col-sm-6">
    <div class="card" > 
    <div class="progress" style="height: 2px;">
  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      <div class="card-body">
      <?php
    echo' <img class="img-fluid card-img-top" src="admin/data/uploads/imgUser/'.$rowm['imgUp'].'" alt="..."/></a>';
      ?>
      </div>
      <div class="progress" style="height: 2px;">
  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div></div> </div> </div> </div>
<br><br><br><br><br>
  <!-- footer -->
  <?php include 'includes/templates/footer.php'; ?>
  <!-- ./footer -->