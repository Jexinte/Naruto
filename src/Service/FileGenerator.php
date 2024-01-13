<?php
/**
 * PHP version 8.
 *
 * @category Service
 * @package  FileGenerator
 * @author   Yokke <mdembelepro@gmail.com>
 * @license  ISC License
 * @link     https://github.com/Jexinte/Naruto
 */

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileGenerator
{
    public const DIR_HISTORY = '../public/assets/img/history/';
    public const DIR_CARD = '../public/assets/img/card/';

    /**
     * Summary of saveCardImg
     * @param UploadedFile $media Object
     *
     * @return string
     * @throws \Exception
     */
    public function saveCardImg(UploadedFile $media): string
    {
        $filename = str_replace('/', '', base64_encode(random_bytes(9)));
        move_uploaded_file($media->getPathname(), self::DIR_CARD . $filename . '.' . $media->getClientOriginalExtension());
        return '/assets/img/card/' . $filename . '.' . $media->getClientOriginalExtension();
    }

    /**
     * Summary of saveHistoryImg
     *
     * @param UploadedFile $media Object
     *
     * @return string
     * @throws \Exception
     */
    public function saveHistoryImg(UploadedFile $media): string
    {
        $filename = str_replace('/', '', base64_encode(random_bytes(9)));
        move_uploaded_file($media->getPathname(), self::DIR_HISTORY . $filename . '.' . $media->getClientOriginalExtension());
        return '/assets/img/history/' . $filename . '.' . $media->getClientOriginalExtension();
    }
}
