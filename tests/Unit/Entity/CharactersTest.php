<?php

namespace App\Tests\Unit\Entity;

use App\Entity\Characters;
use PHPUnit\Framework\TestCase;
use Symfony\Component\String\Slugger\AsciiSlugger;

class CharactersTest extends TestCase
{
    public function testNameShouldReturnSameValue(): void
    {
        $character = new Characters();
        $character->setName('Test');
        $this->assertEquals('Test',$character->getName());
    }
    public function testHistoryShouldReturnSameValue(): void
    {
        $character = new Characters();
        $character->setHistory('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta leo risus, et maximus risus lacinia sed. Nulla vel semper metus. Vestibulum at tortor in augue aliquet pellentesque. Quisque gravida, libero in vulputate bibendum, tellus enim sodales elit, vitae sagittis risus metus vitae dui. Pellentesque aliquet venenatis metus, quis fringilla.');

        $this->assertEquals('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta leo risus, et maximus risus lacinia sed. Nulla vel semper metus. Vestibulum at tortor in augue aliquet pellentesque. Quisque gravida, libero in vulputate bibendum, tellus enim sodales elit, vitae sagittis risus metus vitae dui. Pellentesque aliquet venenatis metus, quis fringilla.',$character->getHistory());
    }
    public function testVillageShouldReturnSameValue(): void
    {
        $character = new Characters();
        $character->setVillage('konoha');
        $this->assertEquals('konoha',$character->getVillage());
    }
    public function testSlugShouldReturnSameValue(): void
    {
        $character = new Characters();
        $slugger = new AsciiSlugger();

        $character->setSlug('Lorem ipsum dolor',$slugger);
        $this->assertEquals('lorem-ipsum-dolor',$character->getSlug());
    }



}
