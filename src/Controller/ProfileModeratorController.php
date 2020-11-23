<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileModeratorController extends AbstractController
{
    /**
     * @Route("/profile/moderator", name="profile_moderator")
     */
    public function index(): Response
    {
        return $this->render('profile_moderator/index.html.twig', [
            'controller_name' => 'ProfileModeratorController',
        ]);
    }
}
