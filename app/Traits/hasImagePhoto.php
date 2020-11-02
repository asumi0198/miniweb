<?php


namespace App\Traits;


use Illuminate\Support\Facades\Storage;

trait hasImagePhoto
{
    /**
     * Get the URL to the user's profile photo.
     *
     * @return string
     */
    public function getImagePhotoUrlAttribute()
    {
        return $this->image_photo_path
            ? Storage::disk($this->imagePhotoDisk())->url($this->image_photo_path)
            : $this->defaultImagePhotoUrl();
    }

    /**
     * Delete the user's profile photo.
     *
     * @return void
     */
    public function deleteImagePhoto()
    {
        Storage::disk($this->imagePhotoDisk())->delete($this->image_photo_path);

        $this->forceFill([
            'image_photo_path' => null,
        ])->save();
    }

    /**
     * Get the default profile photo URL if no profile photo has been uploaded.
     *
     * @return string
     */
    protected function defaultImagePhotoUrl()
    {
        return 'https://ui-avatars.com/api/?name='.urlencode($this->name).'&color=252f3f&background=e2e8f0';
    }

    /**
     * Get the disk that profile photos should be stored on.
     *
     * @return string
     */
    protected function imagePhotoDisk()
    {
        return 'public';
    }
}
