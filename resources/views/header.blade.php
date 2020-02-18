<header>
            <div class="container-flult">
                <div class="row">
                    <div class="col-xl-12 infor">
                        <ul class="nav infor-nav">
                            <li class="nav-item info-item">
                                <a class="nav-link info-link" href="#">
                                    <span class="page-item"> <i class="fa fa-map-marker" aria-hidden="true"></i> Trung
                                        tâm
                                        Thương Mại Dịch vụ, Cổng 1B, khu VL1, Nam Từ Liêm</span>
                                </a>

                            </li>

                            <li class="nav-item info-item">
                                <a class="nav-link info-link" href="#" data-toggle="tooltip" title="Vietnamese!">
                                    <img src="giao_dien/img/1.png" class="lang">
                                </a>
                                <a class="nav-link info-link" href="#" data-toggle="tooltip" title="English!">
                                    <img src="giao_dien/img/2.png" class="lang">
                                </a>
                                <a class="nav-link info-link" href="#">
                                    <span class="page-item"> <i class="fa fa-phone" aria-hidden="true"></i>+84(0) 974
                                        704
                                        288</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="row menu-header">
                    <ul class="col-xl-5 col-md-5 nav menu1">
                        <li class=" nav-item">
                            <a class=" nav-link active" href="http://127.0.0.1:8000/trang_chu" >trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/show">menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/combo">combo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/dau_bep">đầu bếp</a>
                        </li>
                    </ul>
                    <div class="col-xl-2 col-md-2 menu2">
                        <a class="logo" href="http://127.0.0.1:8000"><img src="giao_dien/img/logo.png"></a>
                    </div>
                    <ul class="col-xl-5 col-md-5 nav menu1">
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/ve_koi">về koi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/tin_tuc">tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:8000/lien_he">liên hệ</a>
                        </li>
                        <div id="app" class="menu-search">
                            <div class="search">

                                <form action=" " method="GET" class="form-search">
                                    <input type="search" placeholder="Search Here..." class="search-text" id="search"
                                        :class=" {active: isActive}">
                                    <a class="fa fa-search" aria-hidden="true" @click="myFunction()"></a>
                                </form>
                            </div>
                            <a href="#" class="cart" data-toggle="tooltip" title="Chưa có sản phẩm nào trong giỏ hàng">

                                <span class="circle" v-on:click="counter+=1">0 <i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </ul>
                </div>
                <div class="res">
                    <nav class="navbar navbar-expand-md  nav-bg">
                        <button class="navbar-toggler nav-bg-button" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse nav-menu" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="item">

                                    <form action="" method="">
                                        <div class="form-group">
                                            <label for="search"></label>
                                            <div class="form-search">
                                                <input type="search" id="search" placeholder="search...">
                                                <button type="submit"><i class="fa fa-search"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                </li>
                                <li class=" nav-item">
                                    <a class=" nav-link active" href="http://127.0.0.1:8000/trang_chu">trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/show">menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/combo">combo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/dau_bep">đầu bếp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/ve_koi">về koi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/tin_tuc">tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/lien_he">liên hệ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="giao_dien/img/1.png" alt="LANGUAGE"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="giao_dien/img/2.png" alt="LANGUAGE"></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="logo">
                        <img src="giao_dien/img/logo.png" alt="logo">
                    </div>
                    <div class="icon">
                        <a href="#" data-toggle="tooltip" title="Thêm giỏ hàng">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </div>





                </div>
            </div>
        </header>