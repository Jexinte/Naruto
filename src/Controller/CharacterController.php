<?php

namespace App\Controller;

use App\Entity\Characters;
use App\Entity\Media;
use App\Form\CharacterType;
use App\Repository\CharactersRepository;
use App\Repository\MediaRepository;
use App\Service\FileGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;

class CharacterController extends AbstractController
{
    #[Route('/personnage/{slug}', name: 'character', methods: ['GET'])]
    public function characterDetail(Characters $character, MediaRepository $mediaRepository): Response
    {
        $media = $mediaRepository->findBy(['characters' => $character]);
        return $this->render('character/character.twig', [
            'character' => $character,
            'media' => current($media)
        ]);
    }

    #[Route('/ajouter-un-personnage', name: 'addCharacterGet', methods: ['GET'])]
    public function addCharacterGet(): Response
    {
        $form = $this->createForm(CharacterType::class);
        return $this->render('character/add_character.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/ajouter-un-personnage', name: 'addCharacterPost', methods: ['POST'])]
    public function addCharacterPost(Request $request, CharactersRepository $charactersRepository, FileGenerator $fileGenerator): Response
    {
        $form = $this->createForm(CharacterType::class);
        $media = new Media();
        $slugger = new AsciiSlugger();
        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $character = $form->getData();

            $imageCard = $form->get('mediaForm')->get('imageCardFile')->getData();
            $imageHistory = $form->get('mediaForm')->get('imageHistoryFile')->getData();

            $media->setImageCardPath($fileGenerator->saveCardImg($imageCard));
            $media->setImageHistoryPath($fileGenerator->saveHistoryImg($imageHistory));

            $character->addMedia($media);
            $character->setSlug($character->getName(), $slugger);
            $charactersRepository->getEm()->persist($character);
            $charactersRepository->getEm()->flush();

            $this->addFlash('success', 'L\'enregistrement du personnage a bien été pris en compte !');
            return $this->redirectToRoute('homepage');

        }
        return $this->render('character/add_character.twig', [
            'form' => $form,
        ]);
    }

}
