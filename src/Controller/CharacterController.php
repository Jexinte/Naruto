<?php

namespace App\Controller;

use App\Entity\Characters;
use App\Entity\Media;
use App\Form\CharacterType;
use App\Repository\MediaRepository;
use App\Service\FileAvailable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharacterController extends AbstractController
{
    #[Route('/personnage/{slug}', name: 'character', methods: ['GET'])]
    public function characterDetail(Characters $character,MediaRepository $mediaRepository): Response
    {
        $media = $mediaRepository->findBy(['characters' => $character]);
        return new Response($this->render('character/character.twig', [
            'character' => $character,
            'media' => current($media)
        ]));
    }
    #[Route('/ajouter-un-personnage', name: 'addCharacterGet', methods: ['GET'])]
    public function addCharacterGet(): Response
    {
        $form = $this->createForm(CharacterType::class);
        return new Response($this->render('character/add_character.twig', [
            'form' => $form
        ]));
    }
    #[Route('/ajouter-un-personnage', name: 'addCharacterPost', methods: ['POST'])]
    public function addCharacterPost(Request $request,FileAvailable $fileAvailable): Response
    {
        $form = $this->createForm(CharacterType::class);

        $form->handleRequest($request);

        //TODO Une nouvelle classse pour les médias sera créer afin d'avoir une meilleure gestion de ces derniers car là ce n'est pas terrible
        if($form->isValid() && $form->isSubmitted())
        {
            $character = $form->getData();
            dd($character->getImage());
        }
        return new Response($this->render('character/add_character.twig', [
            'form' => $form
        ]),Response::HTTP_BAD_REQUEST);
    }

}
