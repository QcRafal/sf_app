<?php

namespace App\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class AppUserBundle
 *
 * @package App\Bundle\UserBundle
 */
class AppUserBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
