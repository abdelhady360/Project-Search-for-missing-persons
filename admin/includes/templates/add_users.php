  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>اضافه عضو جديد</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="?do=inssert" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">الاسم كامل</label>
                  <input type="text" name="FullName" class="form-control" id="exampleInputEmail1" placeholder="الاسم كامل"  required='required'>
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">اسم المستخدم</label>
                  <input type="text"  name="UserName" class="form-control" id="exampleInputEmail1" placeholder="@ Users"  required='required'>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">البريد الالكتروني</label>
                  <input type="email" name="Email" class="form-control" id="exampleInputPassword1" placeholder="gmail.com @"  required='required'>
                </div>              
                <div class="form-group">
                  <label for="exampleInputPassword1">الباسورد</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="***"  required='required'>
                </div> 
                <div class="form-group text-right">
              <label for="exampleFormControlSelect1">الصلاحيات</label>
              <select class="form-control"  name="group_id" id="exampleFormControlSelect1">
              <option value="0" >User</option>
              <option value="1">Admin</option>
              </select>
            </div>                 
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" value='add' class="btn btn-primary">اضافه <i class="fas fa-user-plus"></i></button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          </div></div></section></div>