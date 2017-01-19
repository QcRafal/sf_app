<?php

namespace App\Bundle\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class User
 *
 * @package App\Bundle\UserBundle\Model
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @Serializer\Since(version="1.0")
     * @Serializer\Until(version="1.1")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
