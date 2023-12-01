<?php

declare(strict_types=1);

namespace App\Helpers;

class ConvertHelper extends BaseHelper
{
    // jsonToView
    public static function jsonToView($data): object
    {
        $newData = [];
        if ($data->original) {
            foreach ($data->original as $key => $value) {
                $newData[$key] = json_decode(json_encode($value));
            }
        }
        return (object)$newData;
    }
}
