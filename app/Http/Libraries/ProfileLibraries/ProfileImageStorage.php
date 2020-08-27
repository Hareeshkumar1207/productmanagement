<?php

namespace App\Http\Libraries\ProfileLibraries;

use App\Http\Libraries\HelperFunction;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileImageStorage{
    private $profileImage;
    private $storageDiskName;
    public $test;
    
    const PREPEND_IN_IMAGE = 'profile_image';

    public function __construct()
    {
        return $this;
    }

    public function setProfileImage($profileImage){
        $this->profileImage = $profileImage;
        return $this;
    }

    public function setStorageDiskName($storageDiskName){
        $this->storageDiskName = $storageDiskName;
        return $this;
    }

    public function store()
    {
        $extension = $this->profileImage->getClientOriginalExtension();
        $renameFileString = HelperFunction::renameImageFile(self::PREPEND_IN_IMAGE,$extension);
        Storage::disk($this->storageDiskName)->put($renameFileString , File::get($this->profileImage));
        return $renameFileString;
    }
}


?>