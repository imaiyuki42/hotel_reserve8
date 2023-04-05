<h1>トップ画面</h1>

<div class="">
    @if (session('login_success'))
    {{ session('login_success') }}
    @endif
</div>

<p>名前：{{ Auth::user()->name }}</p>
<p>名前：{{ Auth::user()->email }}</p>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
</form>