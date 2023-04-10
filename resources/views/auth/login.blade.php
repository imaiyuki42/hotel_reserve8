<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログインフォーム</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script href="{{ asset('js/app.js') }}"></script>
</head>

<body>
  <!-- バリデーションメッセージ -->
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <!-- ログイン時のセッションの中身を表示 -->
  <x-alert type="danger" :session="session('login_error')" />

  <!-- ログアウト時のセッションの中身を表示 -->
  <x-alert type="danger" :session="session('logout')" />
  <!-- <div class="">
    @if (session('logout'))
    {{ session('logout') }}
    @endif
</div> -->


  <!-- ログインフォーム -->
  <form action="{{ route('login') }}" method="post">
    @csrf
    <label for="">メールアドレス</label>
    <input type="email" name="email">

    <label for="">パスワード</label>
    <input type="password" name="password">

    <button type="submit">ログイン</button>
  </form>

  <a href="{{ route('register.index') }}">新規登録はこちら</a>
</body>

</html>