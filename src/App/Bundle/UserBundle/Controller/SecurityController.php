<?php

namespace App\Bundle\UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseSecurityController;

/**
 * Class SecurityController
 *
 * @package App\Bundle\UserBundle\Controller
 */
class SecurityController extends BaseSecurityController
{
    /**
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data)
    {
        return $this->render('AppUserBundle:Security:login.html.twig', $data);
    }
}
