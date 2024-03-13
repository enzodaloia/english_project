<?php

namespace App\Controller;

use App\Repository\CardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
        ]);
    }

    #[Route('/documentation', name: 'app_doc')]
    public function doc(CardRepository $cardRepository): Response
    {
        return $this->render('front/documentation.html.twig', [
            'cards' => $cardRepository->findAll(),
        ]);
    }
}
