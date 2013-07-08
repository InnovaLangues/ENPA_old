<?php

namespace Innova\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
