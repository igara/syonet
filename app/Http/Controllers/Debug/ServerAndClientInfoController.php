<?php

namespace App\Http\Controllers\Debug;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Auth\Access\Response;

class ServerAndClientInfoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ServerAndClientInfoController
    |--------------------------------------------------------------------------
    |
    | このコントローラーはクライアントとサーバの情報を扱う
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * phpinfoを開く画面
     *
     * @return Response
     */
    public function phpinfoAction()
    {
    	//exit();
    	return view('debug/phpinfo');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
}
