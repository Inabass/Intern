<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * ログイン後のリダイレクト先
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * ログイン済みの場合、ホームに引き戻すミドルウェアを適用
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * 未ログイン時に表示されるページ
     * @param Test test
     * @return void
     */
     public function showLoginForm() {
       return view("auth/login");
     }


}
