<template>
     <div class="container">
                <div class="order">
                    <div class=" row">
                        <div class="infor-order col-xl-6 col-md-12 ">
                            <h3 class="order1">đặt hàng</h3>
                            <form aciton="" method="GET">
                                <div class="  name form-group">
                                    <label for="name">họ và tên <span style="color:red">*</span></label>
                                    <input type="text" id="name" placeholder=" " class="form-control">

                                </div>
                                <div class=" form-group ">
                                    <p>giới tính:</p>


                                    <label for="male" class=" gender">
                                        <input type="radio" id="male" name="gender" value="male" checked>male
                                    </label>

                                    <label for="female" class=" gender">
                                        <input type="radio" id="female" name="gender" value="female"> female
                                    </label>
                                    <label for="orther" class=" gender">
                                        <input type="radio" name="gender" id="orther" value="other"> Other

                                    </label>

                                </div>


                                <div class="form-group  email">
                                    <label for="email">email<span style="color:red">*</span></label>
                                    <input type="email" id="email" placeholder="abc@gmail.com" class="form-control">
                                </div>
                                <div class="form-group address">
                                    <label for="address">địa chỉ<span style="color:red">*</span></label>
                                    <input type="text" id="address" class="form-control">
                                </div>
                                <div class="form-group number">
                                    <label for="number">điện thoại<span style="color:red">*</span></label>
                                    <input type="text" id="number" placeholder="" class="form-control">
                                </div>
                                <div class="form-group note">
                                    <label for="number">Ghi Chú<span style="color:red"></span></label>
                                    <input type="text" id="number" placeholder="" class="form-control">
                                </div>

                            </form>
                        </div>


                        <div class="order col-xl-6 col-md-12">
                            <div class="">
                                <div class="order-custor">
                                    <h4 class="order2">Đơn hàng của bạn:</h4>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <a href="#"><img src="giao_dien/dat_hang/img/suon.png" width="100%" height="auto"></a>
                                        </div>
                                        <div class="col-xl-8">
                                            <p>LƯƠN NHẬT SỐT TERI</p>
                                            <p>Đơn giá: 210.000 VNĐ </p>
                                            <p>Số lượng:1</p>
                                        </div>
                                    </div>
                                    <div class="money">
                                        <p>Tổng Tiền:</p>
                                        <p>210.000 VNĐ</p>
                                    </div>
                                </div>
                                <form action="" method="">
                                    <div class="pay">
                                        <h4 class="order3">Hình thức thanh toán</h4>
                                        <label for="payment" class="chuyen-khoan" >
                                            <input type="radio" id="payment" name="pay"  checked><span class="btn-thanhtoan">Thanh toán
                                            khi nhận hàng</span>
                                        </label>
                                        <label class="chuyen-khoan" for="aripay"><input type="radio" id="aripay" name="pay"
                                                ><span class="btn-thanhtoan">Chuyển Khoản</span></label>
                                    </div>
                                    <div class="order-btn order-now">
                                        <button type="submit" > Mua Ngay</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<style lang="scss" scoped>
    .chuyen-khoan{
        margin-left: 70px;
    }
    .order-now{
        margin-bottom: 15px;
    }
    .btn-thanhtoan{
        display: inline-block;
        margin-left: 10px;
    }
    .order3{
        margin-bottom: 15px;
    }
</style>