<?php

class RomanNumeralsConverter
{
    // 	static variable
	protected static $lookup = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        20 => 'XX',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
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
		
		return $solution;
		
	}
	
}
