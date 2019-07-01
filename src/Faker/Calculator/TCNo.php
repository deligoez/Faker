<?php

namespace Faker\Calculator;

use InvalidArgumentException;

class TCNo
{
    /**
     * Generates Turkish Identity Number Checksum
     * Gets first 9 digit as prefix and calcuates checksums
     *
     * https://en.wikipedia.org/wiki/Turkish_Identification_Number
     *
     * @param string $identityPrefix
     * @return string Checksum (two digit)
     */
    public static function checksum($identityPrefix)
    {
        $tcKimlikNo = strval($identityPrefix);

        if (strlen(strval($tcKimlikNo)) != 9) {
            throw new InvalidArgumentException('Argument should be an integer and should be 9 digits.');
        }

        if (! preg_match('/^[1-9]{1}[0-9]{8}$/', $tcKimlikNo)) {
            throw new InvalidArgumentException('Argument should be a valid identy prefix.');
        }

        $oddDigitsSum = $tcKimlikNo[0] + $tcKimlikNo[2] + $tcKimlikNo[4] + $tcKimlikNo[6] + $tcKimlikNo[8];
        $evenDigitsSum = $tcKimlikNo[1] + $tcKimlikNo[3] + $tcKimlikNo[5] + $tcKimlikNo[7];
        $digit10 = ($oddDigitsSum * 7 - $evenDigitsSum) % 10;
        $digit11 = ($oddDigitsSum + $evenDigitsSum + $digit10) % 10;

        return $digit10 . $digit11;
    }

    /**
     * Checks whether an TCNo has a valid checksum
     *
     * @param string $tcNo
     * @return boolean
     */
    public static function isValid($tcNo)
    {
        return self::checksum(substr($tcNo, 0, -2)) === substr($tcNo, -2, 2);
    }
}
