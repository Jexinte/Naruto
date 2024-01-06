<?php

namespace App\Controller;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VillageController extends AbstractController
{
    #[Route('/konoha-characters', name: 'konohaCharacters',methods: ['GET'])]
    public function konohaCharactersGet(CharactersRepository $charactersRepository): Response
    {

        return $this->render('village/konoha/konoha.twig', [
            'characters' => $charactersRepository->findBy(['village' => 'konoha']),
        ]);
    }

}
