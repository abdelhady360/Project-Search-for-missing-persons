<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>تعديل بياناتي</h1>
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
        <form action="?do=update" method="POST" >
        <input type ="hidden" name="userid" value="<?php echo $userid  ?>"></input>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">الاسم كامل</label>
              <input type="text" name="FullName" class="form-control" id="exampleInputEmail1" placeholder="الاسم كامل" value="<?php echo $row['fullname'] ?>" required='required'>
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">اسم المستخدم</label>
              <input type="text" name="UserName" class="form-control" id="exampleInputEmail1" placeholder="@ Users" value="<?php  echo $row['username'] ?>" required='required'>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">البريد الالكتروني</label>
              <input type="email" name="Email" class="form-control" id="exampleInputPassword1" placeholder="gmail.com @" value="<?php echo $row['mail'] ?>" required='required'>
            </div>              
              <div class="form-group">
              <label for="exampleInputPassword1">الباسورد</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="newPassword" placeholder="***">
            </div>
            <input type="hidden" name="hidPassword"  value="<?php echo $row['password'] ?>" required='required' >
          </div>
          <div class="form-group text-right">
              <label for="exampleFormControlSelect1">الصلاحيات</label>
              <select class="form-control"  name="group_id" id="exampleFormControlSelect1">
              <option value="0" <?php if( $row['group_id'] == '0'){ echo 'selected';} ?>>User</option>
              <option value="1" <?php if( $row['group_id'] == '1'){ echo 'selected';} ?>>Admin</option>
              </select>
            </div> 
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">تعديل <i class="fas fa-user-edit"></i></button>
          </div>
        </form>
      </div>
      <!-- /.box -->
      </div></div></section></div>