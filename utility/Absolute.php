<?php
class Absolute {
    public function getAbsoluteValue($number) {
        if($number < 0) {
            $result = $number * -1;
        } elseif($number >= 0) {
            $result = $number;
        } else {
            $result = 'An error occured!';
        }

        return $result;
    }
}