<?php

namespace App\Services\Login;

use LaravelEasyRepository\BaseService;

interface LoginService extends BaseService{

    /**
     * handle login
     *
     * @param array $data
     * @return mixed
     */
    public function login(array $data);
}
