<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function homeAction()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
