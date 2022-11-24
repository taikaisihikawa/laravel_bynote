<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService

{
    public static function upload($imageFile, $folderName) {

            $fileName = uniqid(rand() . '_');
            $extension = $imageFile->extension();
            $fileNameToStore = $fileName . ' . ' . $extension;
            $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();
            Storage::putFileAs('public/' . $folderName . '/' , $file, $fileNameToStore );
            return $fileNameToStore;

    }
}
