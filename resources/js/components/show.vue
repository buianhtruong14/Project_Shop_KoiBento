<template>
<div>
<checkout>
    <div class="container-flult">
       <div class="checkout ">
           <div class="overlay"></div>
                   <div class="checkout-text">
                       <h2 class="text">về koi</h2>
                   <div class="koi">
                       <a href="#" class="koibento">koi bento - jabanese restaurant</a>
                   </div> 
                   </div>           
    </div>
    </div>
       
</checkout> 
<!---->
    


<!--end header-->
<!--start menu-->

    <div class="menu-show">
            <div class="container">
                <div class="all-menu">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">show all</a>
                        </li>
                        <li class="nav-item">  <a href="http://127.0.0.1:8000/big_bento" class="nav-link">big bento</a></li>
                        <li class="nav-item">  <a  href="http://127.0.0.1:8000/mini_bento" class="nav-link">mini bento</a></li>
                        <li class="nav-item"> <a href="http://127.0.0.1:8000/big_bento" class="nav-link">shushi</a></li>
                    </ul>
                </div>
                <div class="show-all">
                    <div class="row">
                        <div class="col-xl-6 col-md-6" v-for="(prod, index) in list_products" :key="prod.id">
                          
                            <div class="row child1" >
                                <div class=" col-xl-7 ">    
                                    <a href="#">
                                    <img :src="prod.image" style="margin:50px 0" alt="" width="100%" height="auto">
                                    </a>
                                </div>
                                <div class="name-food col-xl-5 ">
                                    <h4>{{prod.name}}</h4>
                                    <p>{{prod.unit_price}} Vnđ</p>
                                    <form action="http://127.0.0.1:8000/dat_hang" method="#">
                                        <input class="minus" type="button" value="-">
                                        <input type="number" name="quantity" min="0" max="100" step="1" value="1">
                                        <input class="minus" type="button" value="+" inputmode="numeric">
                                        <button type="submit" class="add-cart">ADD TO CART</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>       
                </div>
             </div>
     </div>
      </div>  
</template>
<script>
    export default{
        data(){
            return{
                errors:[],
                list_products:[]
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