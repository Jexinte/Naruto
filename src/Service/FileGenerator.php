<?php

namespace App\Service;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileGenerator
{
    const DIR_HISTORY = '../public/assets/img/history/';
    const DIR_CARD = '../public/assets/img/card/';

    public function saveCardImg(UploadedFile $media): string
    {
        $filename = str_replace('/', '', base64_encode(random_bytes(9)));
        move_uploaded_file($media->getPathname(), self::DIR_CARD . $filename . '.' . $media->getClientOriginalExtension());
        return '/assets/img/card/' . $filename . '.' . $media->getClientOriginalExtension();
    }

    public function saveHistoryImg(UploadedFile $media): string
    {
        $filename = str_replace('/', '', base64_encode(random_bytes(9)));
        move_uploaded_file($media->getPathname(), self::DIR_HISTORY . $filename . '.' . $media->getClientOriginalExtension());
        return '/assets/img/history/' . $filename . '.' . $media->getClientOriginalExtension();
    }
}