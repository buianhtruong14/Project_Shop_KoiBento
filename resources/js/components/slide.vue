<template>
    <div>
  <b-carousel
    id="carousel-fade"
    style="text-shadow: 0px 0px 2px #000"
    fade
    indicators
    img-width="1024"
    img-height="480"
   label-prev
   label-next
  >
  <div class="item-slide">
    <b-carousel-slide
      caption=""
      img-src="giao_dien/img/resize.jpg" alt="slide"
    >
     <div class="text-slide ">
                <h2>KOI BENTO <span>JANPNESE LUNCH BOX</span></h2>
                <a href="http://127.0.0.1:8000/dat_hang" class="btn btn-outline-light">ORDER NOW</a>
            </div>
    </b-carousel-slide>
    </div>
    <div class="item-slide">
    <b-carousel-slide
      caption=""
      img-src="giao_dien/img/Shrimp-Eggs-giam-size.png" alt="slide"
    >
     <div class="text-slide ">
                <h2>KOI BENTO <span>JANPNESE LUNCH BOX</span></h2>
                <a href="http://127.0.0.1:8000/dat_hang" class="btn btn-outline-light">ORDER NOW</a>
            </div>
    </b-carousel-slide>
    </div>
  </b-carousel>
</div>
</template>


<style lang="scss">
 .item-slide{
            .text-slide{
                margin-top: -248px;
                margin-left: 148px;
                width: 768px;
                height: 51px;
                text-align: center;
                h2{
                    color:red;
                font-size: 58px;
                font-weight: 700;
               
                span{
                    color:#fff;
                }
                }
            }
    }
   
</style>