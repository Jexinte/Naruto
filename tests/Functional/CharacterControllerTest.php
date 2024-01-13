<?php
/**
 * PHP version 8.
 *
 * @category tests
 * @package  CharactersControllerTest
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */
namespace App\Tests\Functional;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class CharacterControllerTest extends WebTestCase
{
    const ERROR_CASE_NAME = 'Oops! Le nom du personnage doit commencer par une majuscule !';
    const ERROR_CASE_HISTORY = 'Oops! L\'histoire du personnage doit commencer par une majuscule !';
    const ERROR_BLANK_NAME = 'Oops! Merci de spécifier le nom du personnage !';
    const ERROR_BLANK_HISTORY = 'Oops! Merci de spécifier l\'histoire du personnage!';
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
     * Summary of testShouldReturnTheNameOfCharacter
     *
     * @return void
     */
    public function testShouldReturnTheNameOfCharacter(): void
    {
        $rand = rand(1, 36);
        $character = $this->getCharacters()->findOneBy(['id' => $rand]);

        $this->browser->request('GET', '/personnage/' . $character->getName());

        $this->assertResponseIsSuccessful();
        $this->assertEquals($character->getName(), $this->browser->getCrawler()->filter('.container-fluid .right > h1')->text());
    }

    /**
     * Summary of testShouldDisplayTheAddCharacterPage
     *
     * @return void
     */
    public function testShouldDisplayTheAddCharacterPage(): void
    {
        $this->browser->request('GET', '/ajouter-un-personnage');
        $this->assertResponseIsSuccessful();
    }

    /**
     * Summary of testFieldNameReturnBlankError
     *
     * @return void
     */
    public function testFieldNameReturnBlankError(): void
    {
        $this->browser->request('GET', '/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[name]'] = "";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_name] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_BLANK_NAME, $errorName);
    }

    /**
     * Summary of testFieldNameReturnCaseError
     *
     * @return void
     */
    public function testFieldNameReturnCaseError(): void
    {
        $this->browser->request('GET', '/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[name]'] = "test";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_name] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_CASE_NAME, $errorName);
    }

    /**
     * Summary of testFieldHistoryReturnBlankError
     *
     * @return void
     */
    public function testFieldHistoryReturnBlankError(): void
    {
        $this->browser->request('GET', '/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[history]'] = "";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_history] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_BLANK_HISTORY, $errorName);
    }

    /**
     * Summary of testFieldHistoryReturnCaseError
     *
     * @return void
     */
    public function testFieldHistoryReturnCaseError(): void
    {
        $this->browser->request('GET', '/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[history]'] = "lorem ipsum dolor";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_history] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_CASE_HISTORY, $errorName);
    }
}
