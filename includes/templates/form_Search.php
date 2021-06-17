<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $imgUserName = $_FILES['imgUp']['name'];
  $imgUserSize = $_FILES['imgUp']['size'];
  $imgUserTmp  = $_FILES['imgUp']['tmp_name'];
  $imgUserType = $_FILES['imgUp']['type'];

  $imgUserAllowExt = array("jpeg", "jpg" , "png" , "gif");

  $imgUserExt1  = @explode('.' , $imgUserName);
  $imgUserExt2  = @end($imgUserExt1);
  $imgUserExt13 = @strtolower($imgUserExt2);

  $formErrors = array();

  $name         = $_POST['name'];
  $Title_l      = $_POST['Title_l'];
  $nmpur        = $_POST['nmpur'];
  $Title_ll     = $_POST['Title_ll'];
  $Provinces    = $_POST['Provinces'];
  $Title_lll    = $_POST['Title_lll'];
  $nationality  = $_POST['nationality'];
  $Age          = $_POST['Age'];
  $question     = $_POST['question'];

  if (isset($_POST['name']))
      { $filtername     = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  if (!strlen($filtername))
      { $formErrors[]   = 'يجب ان لايكون اسم المفقود فارغ';  }}

  if (!isset($_POST['Title_l']))
      { $filterFullName = filter_var($_POST['Title_l'], FILTER_SANITIZE_STRING);
  if (strlen($filterFullName))
      { $formErrors[]   = 'يجب ان لايكون وقت الاختفاء / وقت العثور المفقود فارغ';  }}

  if (!isset($_POST['Title_ll']))
      { $filteraddress  = filter_var($_POST['Title_ll'], FILTER_SANITIZE_STRING);
  if (strlen($filteraddress))
      { $formErrors[]   = 'يجب ان لايكون العنوان فارغ';  }}

  if (isset($_POST['nmpur']))
      { $filterNumber = filter_var($_POST['nmpur']);
  if (!preg_match("/^[0-9]+$/", $filterNumber)) 
      {  $formErrors[] = 'رجاء تاكد من رقم الهاتف';  }}

  if (empty($formErrors)){
    $imgUserAvtar = rand(0, 10000000) . '_' . $imgUserName;
      move_uploaded_file($imgUserTmp, "admin\data\uploads\imgUser\\" .$imgUserAvtar);
    $query =( 
      "INSERT INTO missing (name, Title_l, nmpur, Title_ll, Provinces, Title_lll, nationality, Age, question,add_date,user_id ,imgUp  )
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
            'z10' => $_SESSION['eid'],
            'z11' => $imgUserAvtar
          )); $msgss='تم بنجاح';  } } ?>
<section class="py-5">
  <div class="container">
    <p class="subtitle text-primary text-right">بلاغ جديد</p>
    <h1 class="h2 mb-5 text-right">الابلاغ عن مفقود   </h1>
<?php
    if(!empty($formErrors)){
      foreach ($formErrors as $error){
        echo"<p class='alert alert-warning'> $error</p>"."<br>"; } }                  
          if(isset($msgss)){ echo"<p class='alert alert-success text-center'><b> $msgss </b></p>"."<br>"; }          
?>
<form class="text-right"   action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" enctype="multipart/form-data">
  <div class="form-row text-right">
    <div class="form-group col-md-12">
      <label for="inputEmail4" class="text-right">اسم المفقود</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    </div>
    <div class="form-group text-right">
      <label for="inputAddress">متي تم الاختفاء</label>
      <input type="text" name="Title_l" class="form-control" id="inputAddress" placeholder="" required>
    </div>
    <div class="text-right">
      <label for="inputCity">رقم الهاتف</label>
      <input type="text" name="nmpur" class="form-control" id="inputCity" required>
    </div>
    <div class="form-group text-right">
      <label for="inputAddress2">العنوان</label>
      <input type="text"  name="Title_ll" class="form-control" id="inputAddress2" placeholder="" required>
    </div>
    <div class="form-group text-right">
      <label for="exampleFormControlSelect1">المحافظه</label>
      <select class="form-control"  name="Provinces" id="exampleFormControlSelect1" required>

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
      <select class="form-control"  name="nationality" id="exampleFormControlSelect1">
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
    <div class="form-group text-right text-right">
      <label for="exampleFormControlTextarea1">معلومات اضافيه</label>
      <textarea class="form-control" name="Title_lll" id="exampleFormControlTextarea1" rows="3">
      </textarea>
    </div> <br>  
      <div class="text-right">
      <label for="exampleFormControlSelect1">صوره خاصه به</label>
    </div>
    <div class="custom-file ">
      <input type="file" name="imgUp" class="custom-file-input" id="customFile" required>
      <label class="custom-file-label" for="customFile">صوره الشخص</label>
    </div> <br><br>
      <div class="text-center">
        <button type="submit" class="btn btn-primary ">نشر البلاغ</button>
      </div></form></div> </section>