<?php

namespace Innova\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class WebRootController
 *
 * @package Innova\AppBundle\Controller
 */
class WebRootController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->redirect(
            $this->generateUrl(
                'pathedit',
                array(
                    'id' => 1
                )
            )
        );
    }   
}
