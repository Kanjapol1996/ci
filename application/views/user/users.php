<h1>รายชื่อผู้เข้าร่วมอบรม</h1>
<div class="alert alert-info" role="alert">
            This is a info alert—check it out!
        </div>
       <a href="/user/adduser" class="btn btn-success"><i class="far fa-plus-square"></i> เพิ่ม</a>
       <hr>
       <table class="table table-hover table-dark">
           <thead>
               <tr>
                   <th>#</th>
                   <th>ชื่อ - สกุล</th>
                   <th>อีเมล์</th>
                   <th>อายุ</th>
                   <th>จัดการ</th>
               </tr>
           </thead>
           <tbody>
           <?php foreach ($users->result() as $user) {
    ?>
               <tr>
                   <td><?php echo $user->user_id ?></td>
                   <td><?php echo $user->fullname ?></td>
                   <td><?php echo $user->email ?></td>
                   <td><?php echo $user->age ?></td>
                   <td>
                       <a href="/user/show/<?php echo $user->user_id ?>" class="btn btn-info"><i class="fa fa-search"></i> แสดงข้อมูล</a>
                       <a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i> แก้ไข</a>
                       <a onclick="javascript: return confirm('คุณแน่ใจหรือ ?')" href="/user/delete/<?php echo $user->user_id ?>" class="btn btn-danger"><i class="fas fa-minus"></i> ลบ</a>
                   </td>
               </tr>
              
               <?php
} ?>
           </tbody>
       </table>
  
