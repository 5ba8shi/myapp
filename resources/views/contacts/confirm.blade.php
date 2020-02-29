@extends('layouts.app')

@section('content')
  <div id="contact" class="big-bg">
    @component('components.header')
    @endcomponent
    <div class="wrapper">
      <h2 class="page-title">確認画面</h2>
      <form action="#">
        <div>
          <label for="name">お名前</label>
          <input type="text" id="name" name="your-name">
        </div>

        <div>
          <label for="email">メールアドレス</label>
          <input type="email" id="email" name="your-email">
        </div>

        <div>
          <label for="message">メッセージ</label>
          <textarea id="message" name="your-message"></textarea>
        </div>

        <input type="submit" class="button" value="送信">
      </form>
    </div><!-- /.wrapper -->
  </div><!-- /#contact -->

  <footer>
    <div class="wrapper">
      <p><small>&copy; 2019 Manabox</small></p>
    </div>
  </footer>
@endsection

