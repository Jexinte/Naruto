<?php

namespace App\Tests\Unit\Entity;

use App\Entity\Media;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MediaTest extends TestCase
{
    public function testImageCardPathShouldReturnTheSamePath(): void
    {
        $media = new Media();
        $file = tempnam(sys_get_temp_dir(), 'FOO');
        $media->setImageCardPath($file);
        preg_match('/(?<=Temp).*/', $file, $matches);
        $this->assertEquals('C:\Users\Mamad\AppData\Local\Temp' . current($matches), $media->getImageCardPath());
    }

    public function testImageHistoryPathShouldReturnTheSamePath(): void
    {
        $media = new Media();
        $file = tempnam(sys_get_temp_dir(), 'FOO');
        $media->setImageHistoryPath($file);
        preg_match('/(?<=Temp).*/', $file, $matches);
        $this->assertEquals('C:\Users\Mamad\AppData\Local\Temp' . current($matches), $media->getImageHistoryPath());
    }

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
