<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">AnoSama</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">หน้าแรก
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เว็บบอร์ด</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            ติดต่อเรา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">เกี่ยวกับเรา</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
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

        <h1>รายชื่อผู้เข้าร่วมอบรม</h1>
        <div class="alert alert-info" role="alert">
            This is a info alert—check it out!
        </div>
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ - นามสกุล</label>
                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ชื่อ นามสกุล">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">อีเมลล์</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="กรอกอีเมล์ เช่น google1996@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">อายุ</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่อายุ">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </center>
                </form>
            </div>
            <div class="col-4">
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
        <table class="table table-dark table-bordered table-hover">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ สกุล</th>
                    <th>อีเมลล์</th>
                    <th>อายุ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>kanjapol Sonjai</td>
                    <td>ganjapol56110@gmail.com</td>
                    <td>21</td>
                    <td>
                        <a href="#" class="btn btn-warning">แก้ไข</a>
                        <a href="#" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>kanjapol Sonjai</td>
                    <td>ganjapol56110@gmail.com</td>
                    <td>21</td>
                    <td>
                        <a href="#" class="btn btn-warning">แก้ไข</a>
                        <a href="#" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>kanjapol Sonjai</td>
                    <td>ganjapol56110@gmail.com</td>
                    <td>21</td>
                    <td>
                        <a href="#" class="btn btn-warning">แก้ไข</a>
                        <a href="#" class="btn btn-danger">ลบ</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>