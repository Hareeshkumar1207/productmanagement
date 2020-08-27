<?php

namespace App\Http\Libraries;

use App\Exceptions\DataProcessingException;
use App\Exceptions\JsonDataInvalidException;
use Illuminate\Support\Collection;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class HelperFunction
{

    public function __construct()
    {
        // 
    }

    //helper function to make image url
    public static function makeImageResourceUrl($imageName, $imagePath, $defaultImage)
    {
        if (empty($imageName)) {
            $imageName = $defaultImage;
        }
        return url($imagePath . $imageName . '');
    }

    //this helper function will remove and replace a specific content from the collection
    
    public static function makeImageResourceUrlFromStorageDisk($imageName, $diskName, $defaultImage)
    {
        if (empty($imageName) || empty(Storage::disk($diskName)->exists($imageName))) {
            $imageName = $defaultImage;
        }
        return Storage::disk($diskName)->url($imageName);
    }
    // for default video
   
    public static function createArrayBasedOnCondition($condition, $array_key, $array_value)
    {
        if ($condition) {
            return [$array_key => $array_value];
        } else {
            return [];
        }
    }

    public static function mergeArrayOfArray($arrayOfArrays)
    {
        $mergerd_arrray = [];
        foreach ($arrayOfArrays as $key => $value) {
            $mergerd_arrray = array_merge($mergerd_arrray, $value);
        }
        return $mergerd_arrray;
    }

    
    //this helper function would return the media and if not found would return the string/int defined in the defaultDataType
    public static function checkAndMakeImageResourceUrlFromStorageDisk($imageName, $diskName, $defaultDataType)
    {
        if (empty($imageName) || empty(Storage::disk($diskName)->exists($imageName))) {
            return $defaultDataType;
        } else {
            return Storage::disk($diskName)->url($imageName);
        }
    }

    public static function convertDateToTimezone($date, $timezone)
    {
        $timestamp = $date;
        $date = Carbon::createFromFormat('d-m-Y H:i:s', $timestamp, $timezone);
        $date->setTimezone('UTC');
        return $date;
    }

    public static function renameImageFile($prepend, $extension)
    {
        //
        return $prepend . '_' . uniqid() . '.' . $extension;
    }


}
