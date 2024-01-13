<?php

namespace App\Tests\Functional;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CharacterControllerTest extends WebTestCase
{
    const ERROR_CASE_NAME = 'Oops! Le nom du personnage doit commencer par une majuscule !';
    const ERROR_CASE_HISTORY = 'Oops! L\'histoire du personnage doit commencer par une majuscule !';
    const ERROR_BLANK_NAME = 'Oops! Merci de spécifier le nom du personnage !';
    const ERROR_BLANK_HISTORY = 'Oops! Merci de spécifier l\'histoire du personnage!';
    private readonly KernelBrowser $browser;

    public function getCharacters(): CharactersRepository
    {
        return static::getContainer()->get(CharactersRepository::class);
    }



    public function setUp(): void
    {
        $this->browser = static::createClient();
    }

    public function testShouldReturnTheNameOfCharacter(): void
    {
        $rand = rand(1,36);
        $character = $this->getCharacters()->findOneBy(['id' => $rand]);

        $this->browser->request('GET','/personnage/'.$character->getName());

        $this->assertResponseIsSuccessful();
        $this->assertEquals($character->getName(),$this->browser->getCrawler()->filter('.container-fluid .right > h1')->text());
    }

    public function testShouldDisplayTheAddCharacterPage():void
    {
        $this->browser->request('GET','/ajouter-un-personnage');
        $this->assertResponseIsSuccessful();
    }

    public function testFieldNameReturnBlankError(): void
    {
        $this->browser->request('GET','/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[name]'] = "";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_name] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_BLANK_NAME,$errorName);
    }
    public function testFieldNameReturnCaseError(): void
    {
        $this->browser->request('GET','/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[name]'] = "test";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_name] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_CASE_NAME,$errorName);
    }

    public function testFieldHistoryReturnBlankError(): void
    {
        $this->browser->request('GET','/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[history]'] = "";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_history] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_BLANK_HISTORY,$errorName);
    }

    public function testFieldHistoryReturnCaseError(): void
    {
        $this->browser->request('GET','/ajouter-un-personnage');
        $form = $this->browser->getCrawler()->selectButton('Envoyer')->form();
        $form['character[history]'] = "lorem ipsum dolor";
        $this->browser->submit($form);
        $errorName = $this->browser->getCrawler()->filter('#add_character label[for=character_history] + ul > li')->text();
        self::assertResponseStatusCodeSame(422);
        self::assertEquals(self::ERROR_CASE_HISTORY,$errorName);
    }
}
