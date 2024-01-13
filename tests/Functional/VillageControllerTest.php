<?php
/**
 * PHP version 8.
 *
 * @category tests
 * @package  VillageControllerTest
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */

namespace App\Tests\Functional;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VillageControllerTest extends WebTestCase
{
    private readonly KernelBrowser $browser;

    /**
     * Summary of getCharacters
     *
     * @return CharactersRepository
     */
    public function getCharacters(): CharactersRepository
    {
        return static::getContainer()->get(CharactersRepository::class);
    }


    /**
     * Summary of setUp
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->browser = static::createClient();
    }

    /**
     * Summary of testShouldReturnKonohaVillageCharacters
     *
     * @return void
     */
    public function testShouldReturnKonohaVillageCharacters():void
    {
        $this->browser->request('GET','/konoha-personnages');
        $this->assertCount(count($this->getCharacters()->findBy(['village' => 'konoha'])),$this->browser->getCrawler()->filter('.container-fluid a')->links());;
    }

    /**
     * Summary of testShouldReturnKumoVillageCharacters
     *
     * @return void
     */
    public function testShouldReturnKumoVillageCharacters():void
    {
        $this->browser->request('GET','/kumo-personnages');
        $this->assertCount(count($this->getCharacters()->findBy(['village' => 'kumo'])),$this->browser->getCrawler()->filter('.container-fluid a')->links());;
    }

    /**
     * Summary of testShouldReturnSunaVillageCharacters
     *
     * @return void
     */
    public function testShouldReturnSunaVillageCharacters():void
    {
        $this->browser->request('GET','/suna-personnages');
        $this->assertCount(count($this->getCharacters()->findBy(['village' => 'suna'])),$this->browser->getCrawler()->filter('.container-fluid a')->links());;
    }
}
