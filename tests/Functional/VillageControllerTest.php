<?php

namespace App\Tests\Functional;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VillageControllerTest extends WebTestCase
{
    private readonly KernelBrowser $browser;

    public function getCharacters(): CharactersRepository
    {
        return static::getContainer()->get(CharactersRepository::class);
    }



    public function setUp(): void
    {
        $this->browser = static::createClient();
    }

    public function testShouldReturnKonohaVillageCharacters():void
    {
        $this->browser->request('GET','/konoha-personnages');
        $this->assertCount(count($this->getCharacters()->findBy(['village' => 'konoha'])),$this->browser->getCrawler()->filter('.container-fluid a')->links());;
    }
    public function testShouldReturnKumoVillageCharacters():void
    {
        $this->browser->request('GET','/kumo-personnages');
        $this->assertCount(count($this->getCharacters()->findBy(['village' => 'kumo'])),$this->browser->getCrawler()->filter('.container-fluid a')->links());;
    }
    public function testShouldReturnSunaVillageCharacters():void
    {
        $this->browser->request('GET','/suna-personnages');
        $this->assertCount(count($this->getCharacters()->findBy(['village' => 'suna'])),$this->browser->getCrawler()->filter('.container-fluid a')->links());;
    }
}
