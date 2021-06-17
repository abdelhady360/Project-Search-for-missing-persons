<?php 
  session_start();
    if(isset($_SESSION["username"])){

//  Start pageTitle
  $pageTitle ='لوحة التحكم';
//  EnspageTitle

// include
      include 'init.php'; 
      include $conn; 
// End include
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>الاشعارات</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
               <div class="pull-right">
               </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td></td>
                    <td class="mailbox-star">
                        <a href="#"><i class="fa fa-users text-aqua"></i></a>
                      </td>
                    <td class="mailbox-name"><a href="#">عبدالهادى محمد</a></td>
                    <td class="mailbox-subject"><b>عضو جديد</b> </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">11 دقيقه </td>
                    <td class="mailbox-star">
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-warning text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="#"> نورهان محمد </a></td>
                    <td class="mailbox-subject"><b> مفقود جديد  </b></td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">28 دقیقه</td>
                    <td class="mailbox-star">
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                    </td>
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <div class="pull-right">
                </div>
                <!-- /.btn-group -->
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
            </div>
        <!-- /.col (LEFT) -->
      </div>
    </section>
  </div>
<?php
  // include// include
include 'includes/templates/footer.php'; 
// End include

}else{
	header('location:index.php');
}?>