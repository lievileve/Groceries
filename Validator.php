<?php

class Validator {
    public static function string($value, $min = 2, $max = 100) {

        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function integer($value, $min = 1, $max = 99){

        return (is_numeric($value) && $value >= $min && $value <= $max);
    }

    public static function decimal($value, $min = 0.01, $max = 999.99){

        return (is_numeric($value) && $value >= $min && $value <= $max);

    }
}