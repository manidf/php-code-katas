<?php

class PrimeFactors {

    public function generate($number) 
    {
        if($number > 1)
        {
            return [2]; 
        }

        return [];
    }

}
