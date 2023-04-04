<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**ログイン画面表示 */
    public function index() {
        return view('login');
    }

    /**ログイン機能 */
    public function login(LoginFormRequest $request) {
        dd($request->all());
    }
}
