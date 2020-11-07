<?php


namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;

class ImagePath
{
    public function storeProfilePhoto (UploadedFile $file)
    {
        Storage::disk('public')->put($filename = $this->filename('profile', 'jpg'), $this->imageStatic($file->getRealPath(), 'jpg'));
        return $filename;
    }

    public function storeCompany (UploadedFile $file, $folder = 'company', $format = 'jpg')
    {
        Storage::disk('public')->put($filename = $this->filename($folder, $format), $this->imageStatic($file->getRealPath(), $format));
        return $filename;
    }

    private function imageStatic ($path, $format)
    {
        return ImageManagerStatic::make($path)->encode($format);
    }

    private function filename ($folder, $format) {
        return "$folder/".Str::random(20). ".$format";
    }
}
