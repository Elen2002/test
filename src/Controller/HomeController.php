<?php

namespace App\Controller;

use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/{_locale}', name: 'app_home', requirements: ["_locale"=> 'en|ru|ru2'], locale: 'en')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(FormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        }
        return $this->render('home/index.html.twig', [
            'form' => $form,
        ]);
    }
}