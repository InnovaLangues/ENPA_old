<?php

namespace Innova\ActivityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ActivityController
 *
 * @package Innova\ActivityBundle\Controller
 */
class ActivityController extends Controller
{
    /**
     * @return array
     *
     * @Route("/activity/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
