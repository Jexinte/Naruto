<?php

namespace App\Tests\Functional;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

class HomepageControllerTest extends WebTestCase
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

public function testShouldReturnAllCharactersOnHomepage(): void
{
    $this->browser->request('GET', '/');
    $this->assertResponseIsSuccessful();
    $this->assertCount(count($this->getCharacters()->findAll()),$this->browser->getCrawler()->filter('.box:nth-child(n)')->getIterator());
}

}
