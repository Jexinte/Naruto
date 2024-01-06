<?php

namespace App\Controller;

use App\Entity\Characters;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharacterController extends AbstractController
{
    #[Route('/character/{slug}', name: 'character', methods: ['GET'])]
    public function characterDetail(Characters $character): Response
    {
        return new Response($this->render('character/character.twig', [
            'character' => $character
        ]));
    }
}
