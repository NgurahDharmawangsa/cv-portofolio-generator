<?php

namespace App\Services\Login;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Login\LoginRepository;

class LoginServiceImplement extends ServiceApi implements LoginService
{

  /**
   * set message api for CRUD
   * @param string $title
   * @param string $create_message
   * @param string $update_message
   * @param string $delete_message
   */
  protected $title = "";
  protected $create_message = "";
  protected $update_message = "";
  protected $delete_message = "";

  /**
   * don't change $this->mainRepository variable name
   * because used in extends service class
   */
  protected $mainRepository;

  public function __construct(LoginRepository $mainRepository)
  {
    $this->mainRepository = $mainRepository;
  }

  public function login(array $data)
  {
    
  }
}
