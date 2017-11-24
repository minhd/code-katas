<?php

namespace MinhD;

class PrimeFactors
{
    /**
     * @param $number
     * @return array
     */
    public static function generate($number)
    {
        $primes = [];

        for ($candidate = 2; $number > 1; $candidate++) {
            for (;$number % $candidate == 0;$number /= $candidate) {
                $primes[] = $candidate;
            }
        }

        return $primes;
    }

    public static function generate_2($number)
    {
        $primes = [];

        $candidate = 2;
        while ($number > 1) {
            while ($number % $candidate == 0) {
                $primes[] = $candidate;
                $number /= $candidate;
            }
            $candidate++;
        }

        return $primes;
    }
}
