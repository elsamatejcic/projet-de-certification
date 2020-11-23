<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileStudentController extends AbstractController
{
    /**
     * @Route("/profile/student", name="profile_student")
     */
    public function index(): Response
    {
        return $this->render('profile_student/index.html.twig', [
            'controller_name' => 'ProfileStudentController',
        ]);
    }
}
