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

        return new Response($this->render('village/konoha/konoha.twig', [
            'characters' => $charactersRepository->findBy(['village' => 'konoha']),
        ]));
    }
    #[Route('/kumo-characters', name: 'kumoCharacters',methods: ['GET'])]
    public function kumoCharactersGet(CharactersRepository $charactersRepository): Response
    {
        return new Response($this->render('village/kumo/kumo.twig', [
            'characters' => $charactersRepository->findBy(['village' => 'kumo']),
        ]));
    }
    #[Route('/suna-characters', name: 'sunaCharacters',methods: ['GET'])]
    public function sunaCharactersGet(CharactersRepository $charactersRepository): Response
    {
        return new Response($this->render('village/suna/suna.twig', [
            'characters' => $charactersRepository->findBy(['village' => 'suna']),
        ]));
    }
}
