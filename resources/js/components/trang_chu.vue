<template>
<div>
   
        <div class="content wow fadeInLeftBig " data-wow-duration="1s" data-wow-delay="1s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        <h3>về
                            <span>koi</span>
                        </h3>
                        <p class="text-content1">KOI Bento là một dự án doanh nghiệp xã hội trong đó toàn bộ lợi nhuận
                            dùng để<br> giúp đỡ những thanh niên có hoàn cảnh khó khăn đang theo học tại REACH<br> – một
                            trong những NGO đạt được nhiều thành công tại Việt Nam.</p>
                        <p class="text-content2">KOI Bento chuyên cung cấp hộp cơm trưa Nhật Bản tới tận tay khách hàng.
                            Tất cả<br> các sản phẩm của KOI đều được chuẩn bị công phu bởi các đầu bếp dày dặn kinh<br>
                            nghiệm của REACH và các học sinh.</p>
                        <p class="text-content3">Chúng tôi luôn đảm bảo các suất ăn tươi ngon, giàu dinh dưỡng và chuẩn
                            bị bởi<br> những nguyên liệu tuyệt vời nhất. Chúng tôi luôn nỗ lực mang tới những món ăn<br>
                            chuẩn Nhật tới thực khách của KOI.</p>
                        <p class="text-content4"><strong>KOI BENTO – Hộp cơm trưa Nhật Bản tươi ngon và dinh dưỡng cho
                                tất cả mọi<br> người.</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu wow fadeInDown " data-wow-duration="1s" data-wow-delay="1s" data-spy="scroll"  id="demos"
            data-target="#demo" data-offset="1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12" id="demo">
                        <h3><strong>food menu</strong></h3>
                        <div class="line"></div>
                        <ul class="nav nav-menu   ">
                            <li class="nav-item menu-item">
                                <a href="http://127.0.0.1:8000/show" class="nav-link menu-link">Show all</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="http://127.0.0.1:8000/big_bento" class="nav-link menu-link">big bento</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="http://127.0.0.1:8000/mini_bento" class="nav-link menu-link">mini bento</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="http://127.0.0.1:8000/sushi" class="nav-link menu-link">sushi</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="row row-menu" >
                    <div class="col-xl-4 col-md-6 col-12 menu-cart" v-for="(prod, index) in list_products" :key="prod.id">
                        <div class="food-all" id="food-koi1">
                            <a href="http://127.0.0.1:8000/dat_hang">
                                <img width="100%" :src="prod.image" alt="koi">
                            </a>
                        </div>
                        <div class="name-food" id="demo">
                            <h4>{{ prod.name }}</h4>
                            <p>{{ prod.unit_price }}</p>
                            <form action="http://127.0.0.1:8000/dat_hang" method="#">
                                <button type="button" @click="countDown()">-</button>
                                <input type="number" name="quantity" min="0" max="100" step="1" value="1">
                                <button type="buton" @click="countUp()">+</button>
                                <button type="submit" class="add-cart">ADD TO CART</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="servises wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12">
                        <h3><strong>ĐẦU BẾP NHÀ HÀNG</strong></h3>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-12">
                       <a href="http://127.0.0.1:8000/dau_bep1">
                       <img src="giao_dien/img/8.png" alt="KOI" width="350" height="350" class="rounded-circle">
                       </a>
                        <h4>NGUYỄN ĐỈNH</h4>
                        <p>chef de Cuisine</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                       <a href="http://127.0.0.1:8000/dau_bep2">
                       <img src="giao_dien/img/9.png" alt="KOI" width="350" height="350" class="rounded-circle">
                       </a>
                        <h4>TRẦN DŨNG</h4>
                        <p>chef</p>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                      <a href="http://127.0.0.1:8000/dau_bep3m">
                      <img src="giao_dien/img/10.jpg" alt="KOI" width="350" height="350" class="rounded-circle">
                      </a>
                        <h4>HỌC SINH LỚP BẾP TẠI REACH</h4>
                        <p>Chef's assistant</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="information-koi wow rollIn" data-wow-duration="1s" data-wow-delay="1s">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-12 information">
                        <h3>TIN TỨC</h3>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-12 information">
                        <img src="giao_dien/img/saba-377x251.png" alt="koi">
                        <h4>
                            <a href="#">Cơm hộp Bento – điểm thú vị trong văn hóa ẩm thực Nhật Bản</a>
                        </h4>
                        <div class="date">
                            <i class="fa fa-calendar"></i>
                            <a href="#">13 Th3, 2018</a>
                        </div>
                        <p>Nhắc tới Nhật Bản, ai ai cũng nghĩ tới sự cần cù, tỉ mỉ và…</p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 information">
                        <img src="giao_dien/img/class-377x251.jpg " alt="koi">
                        <h4>
                            <a href="#">Câu chuyện về KOI – doanh nghiệp xã hội của REACH</a>
                        </h4>
                        <div class="date">
                            <i class="fa fa-calendar"></i>
                            <a href="#">13 Th3, 2018</a>
                        </div>
                        <p>KOI Bento là một doanh nghiệp xã hội của REACH trong đó 100% lợi nhuận…</p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-12 information">
                        <img src="giao_dien/img/Linh-2-377x251.jpg" alt="koi">
                        <h4>
                            <a href="#">KOI Bento – Đồng hành chắp cánh những ước mơ</a>
                        </h4>
                        <div class="date">
                            <i class="fa fa-calendar"></i>
                            <a href="#">13 Th3, 2018</a>
                        </div>
                        <p>Linh sinh ra ở một vùng quê nghèo miền núi tỉnh Thanh Hóa. Cô gái…</p>
                    </div>
                </div>
            </div>
        </div>
</div>

</template>
<script>
    export default{
        data: function(){
            return{
                errors:[],
                list_products:[],
                count: 0
            }
        },
        created(){
            this.getListProducts()
        },
        methods:{
            
           getListProducts() {
               axios.get('/produc')
               .then(response => {
                   this.list_products = response.data
               })
               .catch(error => {
                   this.errors = error.response.data.errors.name
               })
           }
       }
    }
</script>
<style lang="scss" scoped>
.error {
    span {
        color: red;
    }
}
.row{
    .menu-cart{
        margin-top: 15px;
        margin-bottom: 15px; 
    }
}
</style>