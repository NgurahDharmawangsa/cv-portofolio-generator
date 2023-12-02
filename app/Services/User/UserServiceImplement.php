<?php

namespace App\Services\User;

use App\Models\Role;
use LaravelEasyRepository\ServiceApi;
use App\Repositories\User\UserRepository;

class UserServiceImplement extends ServiceApi implements UserService{

    /**
     * set message api for CRUD
     * @param string $title
     * @param string $create_message
     * @param string $update_message
     * @param string $delete_message
     */
     protected $title = "User";
     protected $create_message = "successfully created";
     protected $update_message = "successfully updated";
     protected $delete_message = "successfully deleted";

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function register($data)
    {
      try {
        $user = $this->mainRepository->create($data);
        $user->roles()->attach(Role::MAHASISWA);

        return $this->Setcode(200)
              ->setStatus(true)
              ->setStatus("Successfully Registered")
              ->setResult(['redirect' => route('login')]);
      } catch (\Exception $exception) {
        return $this->exceptionResponse($exception);
      }
    }
}
