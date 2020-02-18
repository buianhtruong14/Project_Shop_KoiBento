<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="giao_dien/news/new3/style.css">
</head>
<body>
    @extends('master')
    @section('content')
    <div class="content-top">
        <div class="container">
            <h1>CHUYÊN MỤC :TIN TỨC</h1>
            <p><a href="asset/trang_chu.blade.php">KOI BENTO - Nhà hàng Nhật>Tin TỨC></a><span>KOI Bento – Đồng hành chắp cánh những ước mơ</span></p>
        </div>
    </div>
    <div class="content-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-12">
                    <div class="new-header">
                        <div class="img-content">
                            <img src="giao_dien/news/new1/img/class-377x251.jpg" alt="img">
                        </div>
                        <div class="text-content">
                            <h2> <a href="#">
                                    KOI Bento Đồng hành những ước mơ</a>
                            </h2>
                            <ul class="nav nav-content">
                                <li class="nav-item ">Post By<span> <a href="#">Koi</a></span></li>
                                <li class="nav-item">Comment<span> (0)</li>
                                <li class="nav-item">Tag:<span> <a href="#" target="_self"> doanh nghiệp xã hội, KOI bento, món nhật, nấu ăn, REACH</a></span>
                                </li>
                            </ul>
                            
                                <p>KOI Bento là một doanh nghiệp xã hội của REACH trong đó 100% lợi nhuận được sử dụng để giúp đỡ những thanh niên có hoàn cảnh khó khăn đang theo học tại đây. REACH là một tổ chức phi chính phủ tại Việt Nam trong lĩnh vực đào tạo nghề và giúp đỡ tìm việc cho những thanh niên có hoàn cảnh khó khăn. Mỗi năm, REACH đào tạo hơn 1000 học viên và giúp các em có được công việc ổn định, thay đổi cuộc sống.</p>
                                <img src="giao_dien/news/new1/img/10.jpg" alt="koi">
                                <p>KOI Bento là một sáng kiến doanh nghiệp xã hội dựa trên lớp học nấu ăn của REACH. KOI cung cấp bữa ăn trưa Nhật Bản giao hàng tận nơi tới địa chỉ của bạn. Tất cả những suất ăn tại KOI đều được chuẩn bị bởi chính những người thầy, đầu bếp giàu kinh nghiệm tại REACH cùng với các em học sinh. Đây là cơ hội để các em học sinh học hỏi đồng thời tập làm việc trong môi trường kinh doanh.</p>
                                <img src="giao_dien/news/new1/img/resize-1024x683.jpg" alt="koi">
                                <p>Nguyên liệu chính từ KOI đều được nhập khẩu chính gốc từ Nhật Bản, đảm bảo chất lượng. Các loại rau xanh được mua tại các trang trại Việt Nam luôn đảm bảo tươi ngon, an toàn.</p>
                                <p>Đến với KOI, bạn hoàn toàn có thể tin tưởng vào chất lượng sản phẩm. Mọi nguyên vật liệu đều được lựa chọn tỉ mỉ, trang trí đẹp mắt và dinh dưỡng với phong cách chuẩn Nhật.</p>
                                <p>✔  Nguyên liệu Nhật Bản!</p>
                                <p>✔ Phong cách Nhật Bản!</p>
                                <p>✔Menu da dạng!</p>
                                <p>✔ Giao nhận tận nơi!</p>
                                <p>KOI Bento luôn nỗ lực mang lại bữa ăn trưa dinh dưỡng, đẹp mắt và chuẩn Nhật tới mọi khách hàng!</p>
                                <p>Chúng tôi hy vọng bạn sẽ ủng hộ với đơn đặt hàng thường xuyên. Đặc biệt, KOI Bento còn phục vụ hội thảo, sự kiện và các cuộc họp khách hàng với số lượng lớn.</p>
                                <p>Chúng tôi cảm ơn các thực khách đã ủng hộ KOI. Với KOI, bạn không chỉ có những bữa trưa tuyệt vời mà còn góp phần giúp đỡ những thanh niên có hoàn cảnh khó khăn tại REACH.</p>
                                <p>KOI Bento – Ẩm thực từ tình yêu thương!</p>
                                <a href="../index.html" class="btn btn-outline-danger">Tin Tức</a>
                            
                          
                        </div>
                    </div>
                    <div class="comment">
                        <h3>Trả Lời</h3>
                        <p>Email của bạn sẽ không được hiển thị công khai. Các trường bắt buộc được đánh dấu *</p>
                        <form action="" method="">
                            <div class="input-group ">
                                <!-- <div class="input-group-prepend">
                                  <span class="input-group-text">@</span>
                                </div> -->
                                <textarea type="text" class="form-control" placeholder="Comment*"></textarea>
                              </div>
                            <div class="form-row ">
                                <div class="col ">
                                   
                                  <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
                                </div>
                                <div class="col ">
                                  <input type="emaiil" class="form-control" placeholder="Email*" name="email">
                                </div>
                              </div>
                              <button type="submit" class="btn btn-outline-danger">Phản Hồi</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-12">
                    <div class="sider-bar-header">
                        <h3>
                            TÌM KIẾM
                        </h3>
                        <form action="" method="">
                            <div class="search">
                                <input type="text" name="search" placeholder="Tìm kiếm...">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sider-bar-center">
                        <h3>DANH MỤC</h3>
                        <p><span>></span><a href="#" target="_self">TIN TỨC</a></p>
                    </div>
                    <div class="sider-bar-footer">
                        <h3>TAGS ClOULD</h3>
                        <a href="new2/index.html" class="btn">bento</a>
                        <a href="#" class="btn">bento Nhật Bản</a>
                        <a href="new2/index.html" class="btn">Cơm Nhật</a>
                        <a href="#" class="btn">Cơm</a>
                        <a href="new2/index.html" class="btn">Cơm Trưa</a>
                        <a href="../index.html
                        " class="btn">Doanh Nghiệp Xã Hội</a>
                        <a href="../index.html" class="btn" target="">KOI BENTO</a>
                        <a href="../index.html" class="btn">Món Nhật</a>
                        <a href="#" class="btn">NHẬT BẢN</a>
                        <a href="../index.html" class="btn">nấu ăn</a>
                        <a href="../index.html" class="btn">REACH</a>
                        <a href="new2/index.html" class="btn">Văn Hóa Ẩm Thực</a>
                        <a href="#" class="btn">Ăn trưa</a>
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