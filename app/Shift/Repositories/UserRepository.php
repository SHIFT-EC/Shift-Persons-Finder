<?php
/**
 * Created by PhpStorm.
 * User: javiermontalvo
 * Date: 18/4/16
 * Time: 9:05 PM
 */

namespace Spf\Shift\Repositories;

use Spf\User;

class UserRepository extends BaseRepo
{
    /**
     * @return User
     */
    public function getModel()
    {
        return new User();
    }
}