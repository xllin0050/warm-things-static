@extends('layouts.template')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ secure_asset("/css/04-product_detail.css")}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

@endsection


@section('main')
<section class="wrap">

    <!-- 麵包屑 -->
    <div class="breadcrumb">
        <a href="/" class="back_home">HOME</a><span>-</span><span>線上購物</span><span>-</span><a
            href="/product">其他</a><span>-古董輪狀系卷</span>
    </div>

    <div class="product_info">
        <div class="product_img_wrap">
            <img src="./img/04-product_detail/古董輪狀系卷.jpg" alt="">
        </div>
        <div class="product_selection">
            <div class="product_title">美好年代 古董輪狀系卷</div>
            <div class="product_price"><span>$550</span></div>
            
            <div class="product_quantity">
                <div class="btn_group">
                    <button type="button" class="btn add_down">-</button>
                    <input type="text" value="1" name="quantity" class="item-quantity">
                    <button type="button" class="btn add_up">+</button>
                </div>
            </div>
            <div class="addchart">
                <input type="button" value="加入購物車">
            </div>
            <div class="note">付款後，從備貨到寄出商品為3個工作天(不包含假日)</div>
        </div>
    </div>
    <div class="product_introduction">
        <div class="content_title">商品介紹</div>
        <div class="product_content">
            有著濃濃的懷舊風味<br>
            我們喜歡這樣的時代感覺<br>
            我們喜歡老時代的物品，於是不定期不定時會展售一些舊時代用品<br>
            首先，得完整性的收集，可不容易<br>
            需花點時間。慢慢來....慢慢找。讓輪廓成型<br>
            老物不會有大量的流通<br>
            所以，如果你也喜歡老時代的物品<br>
            可以細細品味<br>
        </div>
        <div class="product_imgs">
            <img src="./img/04-product_detail/古董輪狀系卷.jpg" alt="">
            <img src="./img/04-product_detail/古董輪狀系卷.jpg" alt="">
            <img src="./img/04-product_detail/古董輪狀系卷.jpg" alt="">
        </div>

    </div>

</section>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>
    <script>
        var addCartBtn = document.querySelector('.addchart_btn');

        addCartBtn.onclick = function(){

            var id=addCartBtn.getAttribute('data-id');

            var qty= document.querySelector('.real_quantity').value;


            var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            var formData = new FormData;



            formData.append('id',id);
            formData.append('_token',_token);
            formData.append('qty',qty);

            fetch('/add_cart',{
                    method:'POST',
                    body:formData,
                })

                .then(function(response){
                    return response.text()
                })


                .then(function(data){
                    console.log('成功',data);
                    if(data == "false"){
                        alert('找不到該項商品');
                    }
                    else{
                        $('.shopping_cart .qty').text(data);
                    }
                })
                .catch(function(error){
                    console.log('錯誤',error);
                })


        };

        var add_down= document.querySelector('.add_down');
        var add_up= document.querySelector('.add_up');
        var show = document.querySelector('.show_quantity');
        var quantity = document.querySelector('.real_quantity');

        add_down.onclick = function(){
            if (quantity.value > 1){
                quantity.value = parseInt(quantity.value) - 1
                show.innerHTML = quantity.value
            }
        }
        add_up.onclick = function(){
            if (quantity.value < 100){
                quantity.value = parseInt(quantity.value) + 1
                show.innerHTML = quantity.value
            }
        }
    </script>
@endsection


