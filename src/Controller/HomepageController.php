<?php
/**
 * PHP version 8.
 *
 * @category Controller
 * @package  HomepageController
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

class HomepageController extends AbstractController
{
    /**
     * Summary of homepage
     *
     * @param CharactersRepository $characterRepository Object
     * @param MediaRepository $mediaRepository Object
     *
     */
    #[Route('/', name: 'homepage')]
    public function homepage(CharactersRepository $characterRepository, MediaRepository $mediaRepository): Response
    {
        return $this->render('homepage/homepage.twig', [
            'characters' => $characterRepository->findAll(),
            'medias' => $mediaRepository->findAll()
        ]);
    }
}
