<?php
/**
 * PHP version 8.
 *
 * @category Controller
 * @package  VillageController
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */

namespace App\Controller;

use App\Repository\CharactersRepository;
use App\Repository\MediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VillageController extends AbstractController
{
    /**
     * Summary of konohaCharactersGet
     *
     * @param CharactersRepository $charactersRepository Object
     * @param MediaRepository $mediaRepository Object
     *
     */
    #[Route('/konoha-personnages', name: 'konohaCharacters', methods: ['GET'])]
    public function konohaCharactersGet(CharactersRepository $charactersRepository, MediaRepository $mediaRepository): Response
    {

        return $this->render('village/konoha/konoha.twig', [
            'medias' => $mediaRepository->findAll(),
            'characters' => $charactersRepository->findBy(['village' => 'konoha']),
        ]);
    }

    /**
     * Summary of kumoCharactersGet*
     *
     * @param CharactersRepository $charactersRepository Object
     * @param MediaRepository $mediaRepository Object
     *
     */
    #[Route('/kumo-personnages', name: 'kumoCharacters', methods: ['GET'])]
    public function kumoCharactersGet(CharactersRepository $charactersRepository, MediaRepository $mediaRepository): Response
    {
        return $this->render('village/kumo/kumo.twig', [
            'characters' => $charactersRepository->findBy(['village' => 'kumo']),
            'medias' => $mediaRepository->findAll()
        ]);
    }

    /**
     * Summary of sunaCharactersGet
     *
     * @param CharactersRepository $charactersRepository Object
     * @param MediaRepository $mediaRepository Object
     *
     */
    #[Route('/suna-personnages', name: 'sunaCharacters', methods: ['GET'])]
    public function sunaCharactersGet(CharactersRepository $charactersRepository, MediaRepository $mediaRepository): Response
    {
        return $this->render('village/suna/suna.twig', [
            'characters' => $charactersRepository->findBy(['village' => 'suna']),
            'medias' => $mediaRepository->findAll()
        ]);
    }
}
