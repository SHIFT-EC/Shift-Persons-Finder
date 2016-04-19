<?php

namespace Spf\Shift\Repositories;

use Spf\Shift\Entities\Missing;

class MissingRepository extends BaseRepo
{
    /**
     * @return Missing
     */
    public function getModel()
    {
        return new Missing();
    }
}