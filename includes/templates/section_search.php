    <section class="d-flex align-items-center dark-overlay bg-cover" style="background-image: url(styles/img/nav/02.jpg);">
      <div class="container py-6 py-lg-7 text-white overlay-content text-center"> 
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <h3 class="display-3 font-weight-bold text-shadow">بحث ...</h3>
            <p class="text-lg text-shadow">ساعدنا لتوصيلهم لاهلهم ...</p>
          </div>
        </div>
      </div>
    </section>
    <div class="container"  >
      <div class="search-bar rounded p-3 p-lg-4 position-relative mt-n5 z-index-20">
              <form action="mysearch.php?tab=serch" method="post" >
                <div class="row">
                  <div class="col-lg-6 d-flex align-items-center form-group">
                    <input class="form-control border-0 shadow-0" type="text" name="name" placeholder="الاسم الاول ؟" required>
              </div>
              <div class="col-lg-4 d-flex align-items-center form-group no-divider">
                <select class="selectpicker" name="Provinces" title="المحافظات" data-style="btn-form-control" required>
                  <option value="1"  >القاهرة</option>
                  <option value="2" >الأسكندرية</option>
                  <option value="3">أسوان</option>
                  <option value="4" >أسيوط</option>
                  <option value="5" >الأقصر</option>
                  <option value="6" >البحيرة</option>
                  <option value="7">بني سويف</option>
                  <option value="8" >بورسعيد</option>
                  <option value="9">جنوب سيناء</option>
                  <option value="10" >الجيزة</option>
                  <option value="11">الدقهلية</option>
                  <option value="12">دمياط</option>
                  <option value="13">سوهاج</option>
                  <option value="14">الشرقية</option>
                  <option value="15" >الغربية</option>
                  <option value="16">الفيوم</option>
                  <option value="17" >القليوبية</option>
                  <option value="18" >قنا</option>
                  <option value="19">كفر الشيخ</option>
                  <option value="20" >مطروح</option>
                  <option value="21" >المنوفية</option>
                  <option value="22" >المنيا</option>
                  <option value="23" >الوادي الجديد</option>
                </select>
                </div>
                  <div class="col-lg-2">
                    <button class="btn btn-primary btn-block rounded-xl h-100" type="submit" name="serchh">بحث </button>
                  </div>
                </div>
              </form>
            </div>
    </div>
      <!-- 2 -->
    <section class="py-6">
      <div class="container">
        <div class="row mb-5">
<?php

  foreach(getItems() as $row){ 
       // <!-- blog item-->
        echo" <div class='col-lg-4 col-sm-6 mb-4 hover-animate'>";
        echo" <div class='card shadow border-0 h-100'>";
        echo" <a href='Detailing.php?usid=".$row['id']."'>";
        echo' <img class="img-fluid card-img-top" src="admin/data/uploads/imgUser/'.$row['imgUp'].'" alt="..."/></a>';
          if($row['question'] == 'Missing'){ echo"  <span class=' p-2 mb-2 bg-danger text-white text-center'><h5 class='abdooo'>مفقوده </h5></span> ";}
            elseif($row['question'] == 'Existing'){ echo"  <span class=' p-2 mb-2 bg-info text-white text-center'><h5 class='abdooo'> شخص ما بلغ عن وجوها </h5></span> ";}
              echo" <div class='card-body'>";
              echo" <h5 class='my-2'>";
              echo" <p class='p-3 mb-2 bg-light text-dark text-center'>" . $row['name'] ."</p>";
              echo" </h5>";
              echo" <p class='text-gray-500 text-sm my-3'>";
              echo' <p class="list-group-item list-group-item-action list-group-item-light"><b> العنوان :</b> '.$row['Title_ll'].'</p>';

            if( $row['Provinces'] == 1){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> القاهرة</p>";}               
            if( $row['Provinces'] == 2){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الأسكندرية</p>";}               
            if( $row['Provinces'] == 3){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> أسوان</p>";}               
            if( $row['Provinces'] == 4){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  أسيوط</p>";}               
            if( $row['Provinces'] == 5){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  الأقصر</p>";}               
            if( $row['Provinces'] == 6){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  البحيرة</p>";}               
            if( $row['Provinces'] == 7){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  بني سويف</p>";}               
            if( $row['Provinces'] == 8){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  بورسعيد</p>";}               
            if( $row['Provinces'] == 9){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  جنوب سيناء</p>";}               
            if( $row['Provinces'] == 10){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  الجيزة</p>";}               
            if( $row['Provinces'] == 11){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  الدقهلية</p>";}               
            if( $row['Provinces'] == 12){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  دمياط</p>";}               
            if( $row['Provinces'] == 13){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  سوهاج</p>";}               
            if( $row['Provinces'] == 14){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  الشرقية</p>";}               
            if( $row['Provinces'] == 15){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الغربية</p>";}               
            if( $row['Provinces'] == 16){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  الفيوم</p>";}               
            if( $row['Provinces'] == 17){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  القليوبية</p>";}               
            if( $row['Provinces'] == 18){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b>  قنا</p>";}               
            if( $row['Provinces'] == 19){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> كفر الشيخ</p>";}               
            if( $row['Provinces'] == 20){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> مطروح</p>";}               
            if( $row['Provinces'] == 21){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة : </b>المنوفية</p>";}               
            if( $row['Provinces'] == 22){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> المنيا</p>";}               
            if( $row['Provinces'] == 23){ echo"<p class='list-group-item list-group-item-action list-group-item-info'><b>المحافظة :</b> الوادي الجديد</p>";}               
            
//////////////////////////////////////////////////////////////////////////////////////////

              echo' <p class="list-group-item list-group-item-action list-group-item-light text-center" dir="ltr">'.$row['add_date'].'</p>';
              echo" </div>";
              echo" </div>";
              echo" </div>"; }
         // <!-- blog item-->
       //   <!-- blog item-->
              echo' <hr>'; ?>
<hr></div></div></div> 
<section class="section section-xs bg-gray-100 text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-3 col-md-12">
              <div class="box-cta-thin">
              <br><br>
                <h4 class="wow-outer"><span class="wow slideInRight">كون احد فعال الخير </span></h4>
                <img src='styles/img/png/6.png' width="70" height="70"  />
                <br>
                <br>
                <div class="wow-outer button-outer"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Blog Posts-->