<?php

namespace App\Bundle\ApiBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class StatusController
 *
 * @package App\Bundle\ApiBundle\Controller
 */
class StatusController extends AbstractApiController
{
    /**
     * @ApiDoc(
     *     resource=true,
     *     description="This is a description of Status:test API method",
     *     tags={
     *         "test": "red"
     *     },
     *     output="App\Bundle\UserBundle\Entity\User"
     * )
     *
     * @return array
     */
    public function testAction()
    {
        return [
            'ping' => 'pong',
        ];
    }
}
