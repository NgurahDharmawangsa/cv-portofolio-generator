<?php

namespace App\Services\Login;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Login\LoginRepository;
use Illuminate\Support\Facades\URL;

/**
 *
 */
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
    /**
     * @var string
     */
    protected $create_message = "";
    /**
     * @var string
     */
    protected $update_message = "";
    /**
     * @var string
     */
    protected $delete_message = "";

  /**
   * don't change $this->mainRepository variable name
   * because used in extends service class
   */
  protected $mainRepository;

    /**
     * @param LoginRepository $mainRepository
     */
    public function __construct(LoginRepository $mainRepository)
  {
    $this->mainRepository = $mainRepository;
  }

    /**
     * @param array $data
     * @return LoginServiceImplement|mixed
     */
    public function login(array $data)
  {
    if (@!$data['remember']) {
      $data['remember'] = false;
    }
    if (auth()->attempt(['email' => $data['email'], 'password' => $data['password']], $data['remember'])) {
      $redirect = redirect()->intended(URL::route('dashboard'));
      return $this->setStatus(true)
        ->setCode(200)
        ->setMessage('Login Berhasil')
        ->setResult(['redirect' => $redirect->getTargetUrl(), 'data' => auth()->user()]);
    } else {
      return $this->setStatus(false)
        ->setCode(401)
        ->setMessage('Kredinsial login tidak diterima');
    }
  }

    /**
     * @return LoginServiceImplement
     */
    public function logout()
  {
    auth()->logout();
    return $this->setStatus(true)
      ->setCode(200)
      ->setMessage('Logout berhasil');
  }
}
