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
     * @param UploadedFile $uploadedFile Object
     *
     * @throws \Exception
     */
    public function saveCardImg(UploadedFile $uploadedFile): string
    {
        $filename = str_replace('/', '', base64_encode(random_bytes(9)));
        move_uploaded_file($uploadedFile->getPathname(), self::DIR_CARD . $filename . '.' . $uploadedFile->getClientOriginalExtension());
        return '/assets/img/card/' . $filename . '.' . $uploadedFile->getClientOriginalExtension();
    }

    /**
     * Summary of saveHistoryImg
     *
     * @param UploadedFile $uploadedFile Object
     *
     * @throws \Exception
     */
    public function saveHistoryImg(UploadedFile $uploadedFile): string
    {
        $filename = str_replace('/', '', base64_encode(random_bytes(9)));
        move_uploaded_file($uploadedFile->getPathname(), self::DIR_HISTORY . $filename . '.' . $uploadedFile->getClientOriginalExtension());
        return '/assets/img/history/' . $filename . '.' . $uploadedFile->getClientOriginalExtension();
    }
}
