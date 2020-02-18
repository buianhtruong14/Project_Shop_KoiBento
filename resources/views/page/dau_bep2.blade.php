<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chef2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="giao_dien/chef/chef2/style.css">
</head>
<body>
@extends('master')
@section('content')
    <div class="content-chef">
        <div class="img-bg">
            <h1>ĐẦU BẾP NHÀ HÀNG</h1>
            <p><a href="../index.html">KOI BENTO - Nhà hàng Nhật></a><a href="#">Đầu Bếp</a><span> REACH cooking class students</span></p>

        </div>
        <div class="container">
        
            <div class="row">
                <div class="col-xl-6 col-md-12 col-12">
                    <div class="img-left">
                        <img src="giao_dien/chef/chef2/img/8.png" alt="KOI" class="img-responsive">
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-12">
                    <div class="content-right">
                        <h1>
                           TRẦN DŨNG</h1>
                            <p class="text-content-right"> Đầu Bếp</p>
                            <h4>Mr.Dung có hơn 4 năm kinh nghiệm trong ẩm thực Nhật Bản.  Sau khi làm việc tại 3 nhà hàng Nhật Bản, anh được thuê làm huấn luyện viên REACH.  Để bổ sung cho các kỹ năng và kinh nghiệm của mình, anh đã được gửi đến Nhật Bản để đào tạo với các đầu bếp bậc thầy.  Ông là một đầu bếp sáng tạo, luôn tìm cách cải thiện kỹ năng của mình và cố gắng đảm bảo sự hài lòng của khách hàng.</h4>
                            <div class="skill">
                                <h2>KĨ NĂNG</h2>
                                <h3>Chúc Mừng Khách Hàng</h3>
                                <div class="progress">
                                   
                                    <div class="progress-bar progress-chef" style="width:56%">56%</div>
                                  </div>
                                  <h3>Công Thức Náu Ăn</h3>
                                  <div class="progress">
                                  
                                    <div class="progress-bar progress-chef" style="width:45%">45%</div>
                                  </div>
                                  <h3>Công Việc
                                  </h3>
                                  <div class="progress">
                                   
                                    <div class="progress-bar progress-chef" style="width:9%">9%</div>
                                  </div>
                                 
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://kit.fontawesome.com/ead959d8f3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>
</html>