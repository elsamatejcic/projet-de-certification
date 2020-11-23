<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavoriteCoursesController extends AbstractController
{
    /**
     * @Route("/favorite/courses", name="favorite_courses")
     */
    public function index(): Response
    {
        return $this->render('favorite_courses/index.html.twig', [
            'controller_name' => 'FavoriteCoursesController',
        ]);
    }
}
