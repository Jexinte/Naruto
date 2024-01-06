<?php

namespace App\DataFixtures;

use App\Entity\Characters;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $charactersFilePath = file_get_contents('./config/personnages_data.json');
        $characters = json_decode($charactersFilePath, true);
        foreach ($characters as $character) {
            $newCharacter = new Characters();
            $newCharacter->setName($character["name"]);
            $newCharacter->setHistory($character["history"]);
            $newCharacter->setImageCardPath($character["imageCardPath"]);
            $newCharacter->setImageHistoryPath($character["imageHistoryPath"]);
            $newCharacter->setVillage($character["village"]);
            $manager->persist($newCharacter);
        }
        $manager->flush();

    }
}
