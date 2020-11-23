<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactFormController extends AbstractController
{
    /**
     * @Route("/contact/form", name="contact_form")
     */
    public function index(): Response
    {

        $form = $this->createFormBuilder()
            ->add('email', EmailType::class)
            ->add('name', TextType::class)
            ->add('message', TextareaType::class)
            ->add('send', SubmitType::class)
            ->getForm();


        return $this->render('contact_form/index.html.twig', [
            'controller_name' => 'ContactFormController',
            'contact_form' =>$form->createView(),
        ]);
    }
}
