<?php

namespace App\Controller;

use App\Repository\CharactersRepository;
use App\Repository\MediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(CharactersRepository $characterRepository,MediaRepository $mediaRepository): Response
    {
        return $this->render('homepage/homepage.twig', [
            'characters' => $characterRepository->findAll(),
            'medias' => $mediaRepository->findAll()
        ]);
    }
}
