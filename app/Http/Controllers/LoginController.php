<?php

namespace App\Http\Controllers;

use App\Services\Login\LoginService;
use App\Services\User\UserService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $loginService, $userService;

    public function __construct(LoginService $loginService, UserService $userService)
    {
        $this->loginService = $loginService;
        $this->userService = $userService;
    }
    
    public function index()
    {
        return view("apps.auth.login");
    }

    public function login(Request $request)
    {
        if($request->ajax()) {
            $data = $request->only(['email', 'password', 'remember']);
            return $this->loginService->login($data)->toJson();
        }
        return abort(404);
    }
}
