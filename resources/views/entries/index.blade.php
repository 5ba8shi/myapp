@extends('layouts.app')

@section('content')
  <div id="home" class="big-bg">
  @component('components.header')
  @endcomponent
    <div class="home-content wrapper">
        <h2 class="page-title">We'll Make Your Day</h2>
        <p>おしゃれなカフェで癒やされてみませんか？無添加の食材で体の中からリフレッシュ。</p>
        <a class="button" href="menu">メニューを見る</a>
    </div><!-- /.home-content -->
  </div><!-- /#home -->
@endsection

