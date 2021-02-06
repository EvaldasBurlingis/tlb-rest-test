<?php

namespace App\Helpers;

class Helper
{
    public static function format_full_name(Array $array) : Array
    {
        $result = [];

        foreach($array as $item) {
            $first_name = $item['first_name'];
            $last_name = $item['last_name'];
            $full_name = "$first_name $last_name";

            array_push($result, ['full_name' => $full_name]);
        }

        return $result;
    }
}
