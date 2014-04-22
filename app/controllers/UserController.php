<?php

use Webnote\Storage\User\UserRepository as User;
/**
 * Class UserController
 */
class UserController extends BaseController {

    /**
     * User Repository injected into constructor
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display User list
     * @return mixed
     */
    public function listAll()
    {
        // Return all Users
        return $this->user->all();
    }

}