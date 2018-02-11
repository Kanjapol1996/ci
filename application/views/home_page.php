        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://dailysocialsmedia.com/wp-content/uploads/2017/05/OFFICIAL-FACEBOOK-SITE.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://d.line-scdn.net/stf/line-lp/1200x630.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://stocknews.com/wp-content/uploads/2017/05/twitter-alternate-logo.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-link">Link</button>
        <hr>
        <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    เข้าสู่ระบบ
                </div>
                <div class="card-body">
                    <?php 
                        if($this->session->userdata('user_id')){
                            
                        }
                    
                    ?>
                <?php
                if ($this->session->has_userdata('user_id')) {
                    ?>
                    <p>สวัสดี, <?php echo $this->session->userdata('fullname') ?></p>
                    <p><a href="/auth/logout">ออกจากระบบ</a></p>
                    <?php
                } else {
                    ?>
                <p>สวัสดี, บุคคลทั่วไป</p>
                <form action="/auth/login" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="ชื่อผู้ใช้">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน">
                    </div>
                    <p><a href="/user/adduser"> สมัครสมาชิก</a></p>
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </form>
               <?php
                }
            ?>
                </div>
            </div>
        </div>
    </div>
    

        