  <!-- head-->
  <?php
      session_start();
// pageTitle
$pageTitle = " من نحن ";
// ./pageTitle 
 
//Navbar
   include 'init.php'; ?>
<!-- ./Navbar -->
    <section class="d-flex align-items-center dark-overlay bg-cover" style="background-image: url(styles/img/photo/1.jpg);">
      <div class="container py-6 py-lg-7 text-white overlay-content text-center"> 
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <h4 class="display-3 font-weight-bold text-shadow">من نحن .</h4>
          </div>
        </div>
      </div>
    </section>
      <!-- ./2 -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
<br>
      <!-- Three columns of text below the carousel -->
      <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="styles/img/photo/2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">الخطط المطروحة</h5>
      <p class="card-text">نحن علي اتم الاستعداد بتوفير خدمات مجانية تتختصص لتحسين مستوي البحث عن المفقودين</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="styles/img/photo/3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">الفريق</h5>
      <p class="card-text">فريقنا هوا فريق مميز لديه مهارات عالية لتحسين خدماتنا </p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="styles/img/nav/02.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">هدفنا حفاظا علي اولادنا</h5>
      <p class="card-text">هدفنا لوحد هوا الحفاظ علي اولادنا </p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
</div>
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h1 class="featurette-heading">من نحن</h1>
          <h4 class="lead">نحن منظمة غير قابله للربح ليث لديها اى مقر حتا الان ولكن نعمل علي هذا في اقرب وقت ولدينا علاقات كبيره مع خدمات الحكوميه حفاظه لحدوث اى حوادث حفاظا علي اولادان </h4>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="styles/img/photo/4.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h1 class="featurette-heading">السلطة القضائية </h1>,<h4>نحن نعمل علي تترابط الحكومة والسلطات الامنية تحسبا لاى بلاغات كذبة او حدوث حوادث حفاظا علي مجتماعنا</h4>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="styles/img/photo/5.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
<!-- footer -->
<?php include 'includes/templates/footer.php'; ?>
  <!-- ./footer -->