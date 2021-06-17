  <!-- head-->
  <?php 
  session_start();
  include 'includes/templates/head.php'; 
  
  ?>
  <!-- ./head-->
  <!-- Navbar-->
  <?php include 'includes/templates/navbar_users.php'; ?>
  <!-- ./Navbar -->
    <section class="py-5 text-right">
      <div class="container">
        <!-- Breadcrumbs -->
        <h1 class="hero-heading mb-0 text-right">المعلومات الشخصية</h1>
        <p class="text-muted mb-5 text-right">إدارة المعلومات الشخصية والإعدادات الخاصة بك هنا.</p>
        <div class="row text-right">
          <div class="col-lg-7 text-right">
            <div class="text-right"> 
              <div class="row mb-3 text-right">
                <div class="col-sm-9">
                  <h5>التفصيل الشخصية</h5>
                </div>
                <div class="col-sm-3 text-right">
                  <button class="btn btn-link pl-0 text-primary collapsed text-right" type="button" data-toggle="collapse" data-target="#personalDetails" aria-expanded="false" aria-controls="personalDetails">تعديل</button>
                </div>
              </div>
              <p class="text-sm text-muted"><i class="fa fa-id-card fa-fw mr-2"></i>Aya Mohamed<br><i class="fa fa-birthday-cake fa-fw mr-2"></i>06/22/1998<br><i class="fa fa-envelope-open fa-fw mr-2"></i>aya_mohamed2020@gmail.com  <span class="mx-2"> | </span>  <i class="fa fa-phone fa-fw mr-2"></i>+21004859602</p>
              <div class="collapse" id="personalDetails">
                <form action="#">
                  <div class="row pt-4">
                      <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">الصوره الشخصية</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
                      <br>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="name">الاسم</label>
                      <input class="form-control" type="text" name="name" id="name" value="Aya Mohamed">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="date">تاريخ الميلاد</label>
                      <input class="form-control" type="text" name="date" id="date" value="06/22/1998">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="email">البريد الالكتروني</label>
                      <input class="form-control" type="email" name="email" id="email" value="aya_mohamed2020@gmail.com">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="phone">رقم الهاتف</label>
                      <input class="form-control" type="text" name="phone" id="phone" value="+21004859602">
                    </div>
                  </div>
                  <button class="btn btn-outline-primary mb-4" type="submit">احفظ بياناتك الشخصية</button>
                </form>
              </div>
            </div>
            <div class="text-block text-right"> 
              <div class="row mb-3">
                <div class="col-sm-9">
                  <h5>العنوان</h5>
                </div>
                <div class="col-sm-3 text-right">
                  <button class="btn btn-link pl-0 text-primary collapsed" type="button" data-toggle="collapse" data-target="#address" aria-expanded="false" aria-controls="address">تعديل</button>
                </div>
              </div>
              <div class="media text-sm text-muted"> <i class="fa fa-address-book fa-fw mr-2"></i>
                <div class="media-body mt-n1">الدقهليه , نبروه<br>شارع البحر</div>
              </div>
              <div class="collapse" id="address">
                <form action="#">
                  <div class="row pt-4">
                    <div class="form-group col-md-6">
                      <label class="form-label" for="street">العنوان</label>
                      <input class="form-control" type="text" name="street" id="street" value=" نبروه">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label" for="apt">العنوان(اختيارى)</label>
                      <input class="form-control" type="text" name="apt" id="apt" value="شارع البحر">
                    </div>
     
                    <div class="form-group col-md-6">
                      <label class="form-label" for="state">المحافظة</label>
                      <select class="selectpicker form-control" name="state" id="state" data-style="btn-selectpicker">
                    <option value="small">الدقهلية</option>
                      <option value="medium">كفر الشيخ</option>
                      <option value="large">دمياط</option>
                      <option value="x-large">الاسكندرية</option>
                      </select>
                    </div>
                  </div>
                  <button class="btn btn-outline-primary">حفظ العنوان</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- footer -->
  <?php include 'includes/templates/footer.php'; ?>
  <!-- ./footer -->