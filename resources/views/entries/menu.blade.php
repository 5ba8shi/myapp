@extends('layouts.app')

@section('content')
  <div id="menu" class="big-bg">
    @component('components.header')
    @endcomponent
    <div class="menu-content wrapper">
      <h2 class="page-title">Menu</h2>
      <p>
        体に優しい自然食を提供する、WCB CAFE。無添加の食材を利用したメニューが特徴です。
        おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒やされてください。
      </p>
    </div><!-- /.menu-content -->
  </div><!-- /#news -->

  <div class="wrapper grid">
    <div class="item big-box">
      <img src="img/menu1.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu2.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu3.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu4.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu5.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu6.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu7.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu8.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
    <div class="item">
      <img src="img/menu9.jpg" alt="">
      <p>写真キャプション写真キャプション</p>
    </div>
  </div><!-- /.grid -->

  <footer>
    <div class="wrapper">
      <p><small>&copy; 2019 Manabox</small></p>
    </div>
  </footer>
@endsection

