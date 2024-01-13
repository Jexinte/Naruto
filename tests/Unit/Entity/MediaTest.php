<?php
/**
 * PHP version 8.
 *
 * @category tests
 * @package  MediaTest
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */
namespace App\Tests\Unit\Entity;

use App\Entity\Media;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MediaTest extends TestCase
{
    /**
     * Summary of
     *
     * @return void
     */
    public function testImageCardPathShouldReturnTheSamePath(): void
    {
        $media = new Media();
        $file = tempnam(sys_get_temp_dir(), 'FOO');
        $media->setImageCardPath($file);
        preg_match('/(?<=Temp).*/', $file, $matches);
        $this->assertEquals('C:\Users\Mamad\AppData\Local\Temp' . current($matches), $media->getImageCardPath());
    }
     /**
      * Summary of testImageHistoryPathShouldReturnTheSamePath
      *
     * @return void
     */
    public function testImageHistoryPathShouldReturnTheSamePath(): void
    {
        $media = new Media();
        $file = tempnam(sys_get_temp_dir(), 'FOO');
        $media->setImageHistoryPath($file);
        preg_match('/(?<=Temp).*/', $file, $matches);
        $this->assertEquals('C:\Users\Mamad\AppData\Local\Temp' . current($matches), $media->getImageHistoryPath());
    }
    /**
     * Summary of testImageCardFileShouldReturnUploadFileObject
     *
     * @return void
     */
    public function testImageCardFileShouldReturnUploadFileObject(): void
    {
        $media = new Media();
        $file = tempnam(sys_get_temp_dir(), 'FOO');
        preg_match('/(?<=Temp).*/', $file, $matches);
        $filename = str_replace("\\", "", current($matches));
        $uploadFile = new UploadedFile($file, $filename);
        $media->setImageCardFile($uploadFile);
        $this->assertInstanceOf(UploadedFile::class, $media->getImageCardFile());

    }
     /**
      * Summary of testImageHistoryCardFileShouldReturnUploadFileObject
      *
     * @return void
     */
    public function testImageHistoryCardFileShouldReturnUploadFileObject(): void
    {
        $media = new Media();
        $file = tempnam(sys_get_temp_dir(), 'FOO');
        preg_match('/(?<=Temp).*/', $file, $matches);
        $filename = str_replace("\\", "", current($matches));
        $uploadFile = new UploadedFile($file, $filename);
        $media->setImageHistoryFile($uploadFile);
        $this->assertInstanceOf(UploadedFile::class, $media->getImageHistoryFile());

    }
}
