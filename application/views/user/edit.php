<div class="row">
<div class="col-8">
<br>
<?php if ($this->session->has_userdata('user_id') and $this->session->userdata('user_type_id') == '1') {
    ?>
<form action="/user/update/<?php echo $user->user_id ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input value="<?php echo $user->username ?>" name="username" type="text" class="form-control" placeholder="username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input value="<?php echo $user->password ?>" name="password" type="password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
        <label>ประเภทผู้ใช้งาน</label>
        <select name="user_type_id" class="form-control">
            <?php foreach ($user_types->result() as $user_type) { ?>
                <option value="<?php echo $user_type->user_type_id ?>"><?php echo $user_type->name ?></option>
            <?php } ?>
         </select>
        </div>
        <div class="form-group">
           <label>ชื่อ</label>
           <input value="<?php echo $user->fullname ?>" name="fullname" type="text" class="form-control" placeholder="กรอกชื่อ สกุล" >
       </div>
       <div class="form-group">
           <label>อีเมล์</label>
           <input value="<?php echo $user->email ?>" name="email" type="email" class="form-control" placeholder="กรอกอีเมล์">
       </div>
       <div class="form-group">
           <label>อายุ</label>
           <input value="<?php echo $user->age ?>" name="age" type="number" class="form-control" placeholder="กรอกอายุ">
       </div>
       <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> บันทึก</button>
</form>
<?php
} ?>
</div>
<div class="col-4">
<br>
    <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
</div>
</div>
<hr>