<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DisconnectedProfileController extends AbstractController
{
    /**
     * @Route("/disconnected/profile", name="disconnected_profile")
     */
    public function index(): Response
    {
        return $this->render('disconnected_profile/index.html.twig', [
            'controller_name' => 'DisconnectedProfileController',
        ]);
    }
}
