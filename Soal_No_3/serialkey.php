<?php

	function Random($length, $chars = '')
	{
		if (!$chars) 
		{
			$chars = implode(range('a','f'));
			$chars .= implode(range('0','9'));
		}

		$shuffled = str_shuffle($chars);
		return substr($shuffled, 0, $length);
	}

	function SerialKey()
	{
		return Random(4).'-'.Random(4).'-'.Random(4).'-'.Random(4);
	}

	echo SerialKey();

?>