<?php
/**
 * PHP version 8.
 *
 * @category DataFixtures
 * @package  AppFixtures
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */

namespace App\DataFixtures;

use App\Entity\Characters;
use App\Entity\Media;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\AsciiSlugger;

class AppFixtures extends Fixture
{
    /**
     * Summary of load
     *
     * @param ObjectManager $manager Object
     *
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        $charactersFilePath = file_get_contents('./config/personnages_data.json');
        $characters = json_decode($charactersFilePath, true);
        foreach ($characters as $character) {
            $newCharacter = new Characters();
            $newCharacter->setName($character["name"]);
            $newCharacter->setHistory($character["history"]);
            $newCharacter->setVillage($character["village"]);
            $newCharacter->setSlug($character['name'], $this->slugger());

            $media = new Media();
            $media->setCharacters($newCharacter);
            $media->setImageCardPath($character['imageCardPath']);
            $media->setImageHistoryPath($character['imageHistoryPath']);
            $manager->persist($newCharacter);
            $manager->persist($media);
        }
        $manager->flush();

    }

    /**
     * Summary of slugger
     *
     * @return AsciiSlugger
     */
    public function slugger(): AsciiSlugger
    {
        return new AsciiSlugger();
    }
}
