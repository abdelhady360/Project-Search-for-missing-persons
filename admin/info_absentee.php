<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>التفصيل</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
                <br>
                <div class="text-right" >
                <?php

    $usid       =  isset($_GET['usid']) && is_numeric($_GET['usid']) ? intval($_GET['usid']) :0;
    $query      =  " SELECT * FROM missing WHERE id = '$usid' LIMIT  1";
    $statement  =  $connect->prepare($query);
    $statement  -> execute(array($usid));
    $rowm       =  $statement -> fetch();
    $count      =  $statement->rowCount();
  
    if($statement->rowCount() > 0){
      if($rowm['question'] == 'Missing'){
        echo"  <span class=' badge badge-danger'><h5 class='abdooo'>مفقوده </h5></span> "; }
      elseif($rowm['question'] == 'Existing'){
        echo"  <span class=' badge badge-danger'><h5 class='abdooo'> شخص ما بلغ عن وجوها </h5></span> "; }
//  class='list-group-item list-group-item-info'

//  class='list-group-item list-group-item-light'
          echo "  <br>";
          echo "  <br>";
          echo "<p class='list-group-item list-group-item-action list-group-item-info'> الاسم : ".$rowm["name"]."</p>";
          echo"<p class='list-group-item list-group-item-light'>وقت الاختفاء : " .$rowm["Title_l"]."</p>";
          echo" <p class='list-group-item list-group-item-action list-group-item-info'>رقم الهاتف : ".$rowm["nmpur"]."</p>";
          echo" <p class='list-group-item list-group-item-action list-group-item-light'>العنوان : ".$rowm["Title_ll"]."</p>";
            if( $rowm['Provinces'] == 1) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : القاهرة</p>"    ;}               
            if( $rowm['Provinces'] == 2) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الأسكندرية</p>"  ;}               
            if( $rowm['Provinces'] == 3) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : أسوان</p>"      ;}               
            if( $rowm['Provinces'] == 4) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : أسيوط</p>"       ;}               
            if( $rowm['Provinces'] == 5) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الأقصر</p>"        ;}               
            if( $rowm['Provinces'] == 6) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : البحيرة</p>"      ;}               
            if( $rowm['Provinces'] == 7) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : بني سويف</p>"     ;}               
            if( $rowm['Provinces'] == 8) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : بورسعيد</p>"     ;}               
            if( $rowm['Provinces'] == 9) { echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : جنوب سيناء</p>"   ;}               
            if( $rowm['Provinces'] == 10){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الجيزة</p>"        ;}               
            if( $rowm['Provinces'] == 11){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الدقهلية</p>"      ;}               
            if( $rowm['Provinces'] == 12){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : دمياط</p>"         ;}               
            if( $rowm['Provinces'] == 13){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : سوهاج</p>"        ;}               
            if( $rowm['Provinces'] == 14){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الشرقية</p>"      ;}               
            if( $rowm['Provinces'] == 15){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الغربية</p>"      ;}               
            if( $rowm['Provinces'] == 16){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الفيوم</p>"       ;}               
            if( $rowm['Provinces'] == 17){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : القليوبية</p>"    ;}               
            if( $rowm['Provinces'] == 18){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : قنا</p>"            ;}               
            if( $rowm['Provinces'] == 19){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : كفر الشيخ</p>"      ;}               
            if( $rowm['Provinces'] == 20){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : مطروح</p>"           ;}               
            if( $rowm['Provinces'] == 21){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : المنوفية</p>"        ;}               
            if( $rowm['Provinces'] == 22){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : المنيا</p>"          ;}               
            if( $rowm['Provinces'] == 23){ echo"<p class='list-group-item list-group-item-action list-group-item-info'>المحافظة : الوادي الجديد</p>"  ;}               
//////////////////////////////////////////////////////////////////////////////////////////
              if( $rowm["nationality"] == 'Male'){  echo"  <p  class='list-group-item list-group-item-action list-group-item-light'> النوع : ذكر </p>";}               
              if( $rowm["nationality"] == 'female'){  echo"  <p  class='list-group-item list-group-item-action list-group-item-light'> النوع : انثي </p>";}   
////////////////////////////////////////////////////////////////////////////////////////////
              if( $rowm["Age"] == 0 ){  echo"  <p class='list-group-item list-group-item-action list-group-item-info'> السن : شاب /ة </p>";}   
              if( $rowm["Age"] == 1 ){  echo"  <p class='list-group-item list-group-item-action list-group-item-info'> السن : طفل /ة </p>";}   
               echo" <p class='list-group-item list-group-item-action list-group-item-light'>معلومات اضافية : ".$rowm["Title_lll"]."</p>";} ?>
                </div>
                <br>
            </div>
          </div>
        </div>        
          <?php
        echo'  <div class="col-md-6">';
        echo'  <!-- AREA CHART -->';
        echo'  <div class="box box-danger">';
        echo'  <div class="box-header with-border">';
        echo'  <img src="data/uploads/imgUser/'.$rowm['imgUp'].'" width="100%" />';
        echo'  </div>';
        echo'  </div>';
        echo'  </div>'; ?>
    <!-- /.col (LEFT) -->
   </div>
   </section>
  </div>