<?php

class RomanNumeralsConverter
{
	
	// 	static variable
	    protected static $lookup = [
	        50 => 'L'
	    ];
	
	public function convert($number)
	{
		$solution = '';
		
        foreach (static::$lookup as $limit => $glyph)
		{
			while ($number >= $limit)
			{
				$solution .= $glyph;
				$number -= $limit;
			}
		}
		
		while ($number >= '10') {
			$solution .= 'X';
			$number -= 10;
		}
		
		while ($number >= '5') {
			$solution .= 'V';
			$number -= 5;
		}
		
		while ($number >= '4') {
			$solution .= 'IV';
			$number -= 4;
		}
		
		while ($number >= '9') {
			$solution .= 'IX';
			$number -= 9;
		}
		
		while ($number >= '1')
		        {
			$solution .= 'I';
			$number -= 1;
		}
		
		$solution .= str_repeat('I', $number);
		
		
		return $solution;
		
	}
	
}
