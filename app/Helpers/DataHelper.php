<?php
namespace App\Helpers;

class DataHelper
{
    public function getAbridgment($text, $length) {
        $result = $text;
        $match = [];
        if (preg_match('/^.{1,'.$length.'}\b/s', $text, $match)) {
            $result = $match[0];
        }
        return $result;
    }
}