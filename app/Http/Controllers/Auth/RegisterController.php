<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    /**会員登録画面表示 */
    public function index() {
        return view('register');
    }

    /**会員登録機能 */
    public function store(RegisterFormRequest $request) {
        
        $user = new User();

        $user->name = $request->input('name');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('login.index');
    }
}
