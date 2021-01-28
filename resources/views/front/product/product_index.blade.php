@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{ secure_asset("/css/04-product_index.css")}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endsection

@section('main')
<section class="bg_wrap">
    <!-- 麵包屑 -->
    <div class="breadcrumb">
        <a href="" class="back_home">HOME</a><span>-</span><span>線上購物</span><span>-</span><a href="">餐盤器皿</a>
    </div>
    <div class="content_wrap">
        <div class="deraction_img"></div>
        <div class="product_type">
            <a href="">餐盤器皿</a>
            <a href="">日式器皿</a>
            <a href="">其他</a>
            
        </div>
        <div class="card_wrap">
            <a class="product_card" href="/test">
                <!-- <div class="product_card"> -->
                    <div class="card_img" style="background-image: url('../img/04-product_index/古董輪狀系卷.jpg')"></div>
                    <div class="product_body">
                        <h2 class="product_title">【美好年代 古董輪狀系卷】</h2>
                        <p class="product_price">售價$550</p>
                    </div>
                <!-- </div> -->
            </a>
            <a class="product_card" href="">
                <!-- <div class="product_card"> -->
                    <div class="card_img" style="background-image: url('./img/04-product_index/offoff\ theatre\ 造形別針3.jpg')"></div>
                    <div class="product_body">
                        <h2 class="product_title">【offoff theatre 造形別針】</h2>
                        <p class="product_price">售價$1200元</p>
                    </div>
                <!-- </div> -->
            </a>
            <a class="product_card" href="">
                <!-- <div class="product_card"> -->
                    <div class="card_img" style="background-image: url('./img/04-product_index/丸文山水圖染付食器.jpg')"></div>
                    <div class="product_body">
                        <h2 class="product_title">【丸文山水圖染付食器】</h2>
                        <p class="product_price">售價$1980</p>
                    </div>
                <!-- </div> -->
            </a>
            <a class="product_card"href="">
                <!-- <div class="product_card"> -->
                    <div class="card_img" style="background-image: url('./img/04-product_index/益子燒作家佐藤敬的黃粉引器.jpg')"></div>
                    <div class="product_body">
                        <h2 class="product_title">【佐藤敬的黃粉引器】</h2>
                        <p class="product_price">售價$1850 </p>
                    </div>
                <!-- </div> -->
            </a>
            <a class="product_card" href="">
                <!-- <div class="product_card"> -->
                    <div class="card_img" style="background-image: url('./img/04-product_index/米力Ｘ印花樂\ 2017聯名印花系列.jpg')"></div>
                    <div class="product_body">
                        <h2 class="product_title">【米力Ｘ印花樂 聯名印花系列】</h2>
                        <p class="product_price">售價$480元</p>
                    </div>
                <!-- </div> -->
            </a>
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection
