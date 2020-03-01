@extends('layouts.app')

@section('content')
  <div id="contact" class="big-bg">
    @component('components.header')
    @endcomponent
    <div class="wrapper">
    <h2 class="page-title">送信しました</h2>
      <a href="/contact" class="button">戻る</a>
    </div><!-- /.wrapper -->
  </div><!-- /#contact -->

  <footer>
    <div class="wrapper">
      <p><small>&copy; 2019 Manabox</small></p>
    </div>
  </footer>
@endsection

