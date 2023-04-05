<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**ログイン画面表示 */
    public function index() {
        return view('login');
    }

    /**
     * ログイン機能
     * メールアドレスとパスワードがある場合は認証する。
     * ない場合はlogin_errorをセッションに渡して返す。
     * */

    public function login(LoginFormRequest $request) {

        $credentials = $request->only(['email', 'password']);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('home')->with('login_success', 'ログインに成功しました。');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。'
        ]);
    }
}
