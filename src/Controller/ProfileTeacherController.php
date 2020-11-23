<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileTeacherController extends AbstractController
{
    /**
     * @Route("/profile/teacher", name="profile_teacher")
     */
    public function index(): Response
    {
        return $this->render('profile_teacher/index.html.twig', [
            'controller_name' => 'ProfileTeacherController',
        ]);
    }
}
