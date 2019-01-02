<?php defined('BASEPATH') OR exit('Tidak ada akses langsung yang diizinkan');

if (! function_exists('cuttext_helper')) {

	function cuttext($text, $num_char, $mode = 2)
	{
		if ($mode != 1)
		{
			$char = $text{$num_char - 1};
			switch($mode)
			{
				case 2: 
					while($char != ' ') {
						$char = $text{--$num_char};
					}
				case 3:
					while($char != ' ') {
						$char = $text{++$num_char};
					}
			}
		}
		return substr($text, 0, $num_char);
	}
}