<?php
//$query = " SELECT * FROM users WHERE group_id != 1";
$query = " SELECT * FROM users  ";
$statement = $connect->prepare($query);
$statement->execute();
$rows = $statement -> fetchAll();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>جدول الاعضاء</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
                <a href="?do=add" class="btn btn-success">اضافه عضو جديد <i class="fas fa-user-plus"></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>الاسم كامل</th>
                  <th>اسم المستخدم </th>
                  <th>البريد الالكتروني</th>
                  <th>الصلاحيات</th>
                  <th> تاريخ الانشاء</th>
                  <th>تعديل</th>
                  <th>حذف</th>
                </tr>
                </thead>
                <tbody>
             <?php
                foreach($rows as $row){ 


                    









                  echo "<tr>";   
                  echo "<td>" .$row['UserID'] . "</td>";
                  echo "<td>" .$row['fullname'] . "</td>";
                  echo "<td>" .$row['username'] . "</td>";
                  echo "<td>" .$row['mail'] . "</td>";
                  echo "<td>";  if($row['group_id'] == '0'){echo 'User';}else{echo 'Admin';} echo "</td>"; 
                  echo "<td>" .$row['Date'] ."</td>";
                  echo "<td>  <a class='btn btn-block btn-primary' href='users.php?do=edit&id=" . $row['UserID'] . "'>تعديل <i class='fas fa-user-edit'></i></a>  </td>";
                  echo "<td>   <a class='btn btn-danger' href='?do=delete&id=" . $row['UserID'] . "'>حذف <i class='fas fa-trash-alt'></i></a>  </td>";
                  ?>

                  <?php
                  echo "</tr>";
                 } 
              ?>    
<!-- Modal --> 
                </tbody>
                <tfoot>
                <tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
