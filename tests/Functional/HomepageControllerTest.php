<?php
/**
 * PHP version 8.
 *
 * @category tests
 * @package  HomepageControllerTest
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */
namespace App\Tests\Functional;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

class HomepageControllerTest extends WebTestCase
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
     * Summary of testShouldReturnAllCharactersOnHomepage
     *
     * @return void
     */
    public function testShouldReturnAllCharactersOnHomepage(): void
{
    $this->browser->request('GET', '/');
    $this->assertResponseIsSuccessful();
    $this->assertCount(count($this->getCharacters()->findAll()),$this->browser->getCrawler()->filter('.box:nth-child(n)')->getIterator());
}

}
