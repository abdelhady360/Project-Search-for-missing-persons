<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $pageTitle ?>
      </h1>
<br>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<!-- ############################################################################ -->

<!-- ############################################################################ -->
                <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo colun('UserID', 'users') ?></h3>
              <p>عدد المستخدمين</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="users.php" class="small-box-footer">عرضهم <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
<!-- ############################################################################ -->

<!-- ############################################################################ -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo colun('nationality', 'missing') ?></h3>
              <p>اجمالي البوستات</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="MissingNew.php?do=Mange" class="small-box-footer">عرضهم <i class="fa fa-arrow-circle-left"></i></a>
          </div>
        </div>
        <!-- ./col -->
<!-- ############################################################################ -->

<!-- ############################################################################ -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
            <?php
              $query = ("  SELECT COUNT(nationality) FROM missing WHERE nationality = 'female' ");
              @$statement = $connect->prepare($query);
              @$statement->execute();
              @$female = $statement->fetchColumn();
          ?>
              <h3><?php echo $female; ?></h3>
              <p>اجمالي  البنات</p>
            </div>
            <div class="icon">
              <img src="styles/dist/img/B.png" width="70" />
            </div>
            <a  class="small-box-footer"> </a>
          </div>
        </div>
        <!-- ./col -->
<!-- ############################################################################ -->

<!-- ############################################################################ -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
          <?php
              $query =("  SELECT COUNT(nationality) FROM missing WHERE nationality = 'Male' ");
              @$statement = $connect->prepare($query);
              @$statement->execute();
              @$Male = $statement->fetchColumn();
          ?>
              <h3><?php echo $Male; ?><sup style="font-size: 20px"></sup></h3>

              <p>اجمالي  الشباب</p>
            </div>
            <div class="icon">
              <img src="styles/dist/img/W.png" width="70" />
            </div>
            <a class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
<!-- ############################################################################ -->

<!-- ############################################################################ -->

        <!-- ./col -->        
                <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

            <?php
              $query =("  SELECT COUNT(question) FROM missing WHERE question = 'Missing' ");
              @$statement = $connect->prepare($query);
              @$statement->execute();
              @$Missing = $statement->fetchColumn();
          ?>
              <h3><?php echo $Missing; ?></h3>

              <p>المفقودين</p>
            </div>
            <div class="icon">
            <img src="styles/dist/img/66.png" width="70" />
            </div>
            <a class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
<!-- ############################################################################ -->

<!-- ############################################################################ -->
         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              $query =("  SELECT COUNT(question) FROM missing WHERE question = 'Existing' ");
              @$statement = $connect->prepare($query);
              @$statement->execute();
              @$Existing = $statement->fetchColumn();
          ?>
              <h3><?php echo $Existing; ?></h3>

              <p>معثور عليهم</p>
            </div>
            <div class="icon">
            <img src="styles/dist/img/88.png" width="70" />
            </div>
            <a class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
<!-- ############################################################################ -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- interactive chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">احصائيات غير منتظمة</h3>

              <div class="box-tools pull-right">
                
                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-xs active" data-toggle="on">تشغيل</button>
                  <button type="button" class="btn btn-default btn-xs" data-toggle="off">ايقاف</button>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div id="interactive" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<!-- ############################################################################ -->
        <!-- ./col -->
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->