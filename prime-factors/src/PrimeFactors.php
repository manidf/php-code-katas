<?php

class PrimeFactors {

	/**
	 * @param $number
	 * @return array
	 */
    public function generate($number) 
    {
        $primes = [];
        $candidate = 2;

        for (; $number > 1; $candidate++) 
        {
            for (; $number % $candidate == 0; $number /= $candidate)
            {
                $primes[] = $candidate;
            }
        }

        // while ($number > 1) 
        // {
        //     while ($number % $candidate == 0)
        //     {
        //         $primes[] = $candidate;
        //         $number /= $candidate;
        //         // append to the primes array the number.
        //         // $primes[] = $number;
        //     }

        //     $candidate++;
        // }

        return $primes;
    }

}
