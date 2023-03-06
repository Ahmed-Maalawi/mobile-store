<?php
namespace App\Http\Traits;

use Intervention\Image\ImageManagerStatic as Image;
Trait ImageTrait {

    public function uploadImg(string $path, $imgFile) {
        $newName = hexdec(uniqid()).$imgFile->getClientOriginalExtension();
        Image::make($imgFile)->save($path . $newName);
        return $path . $newName;
    }
}
