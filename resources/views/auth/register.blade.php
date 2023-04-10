<h1>会員登録</h1>

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

<!-- 会員登録機能 -->
<form action="{{ route('register.store') }}" method="post">
  @csrf
  <label for="">名前</label>
  <input type="text" name="customer_name">
  <label for="">電話番号</label>
  <input type="text" name="phone_number">
  <label for="">メールアドレス</label>
  <input type="email" name="email">
  <label for="">パスワード</label>
  <input type="password" name="password">
  <label for="">パスワード確認</label>
  <input type="password" name="password_confirmation">

  <a href="{{ route('login.index') }}">戻る</a>
  <button type="submit">新規登録</button>
</form>