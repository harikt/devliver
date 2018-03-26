<?php

namespace Shapecode\Devliver\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 *
 * @package Shapecode\Devliver\Controller
 * @author  Nikita Loges
 *
 * @Route("", name="devliver_")
 */
class DefaultController extends Controller
{

    /**
     * @Route("", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->redirectToRoute('devliver_repo_index');
    }

    /**
     * @Route("/packages.json", name="packages")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function packagesAction()
    {
        return $this->redirectToRoute('devliver_repository_index');
    }

    /**
     * @Route("/usage", name="usage")
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function usageAction()
    {
        return $this->render('@Devliver/Home/usage.html.twig', [
            'page' => 'home'
        ]);
    }
}