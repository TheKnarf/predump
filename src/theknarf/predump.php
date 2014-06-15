<?php

namespace theknarf;

class predump
{
	public static function predump()
	{
		foreach( func_get_args() as $item ) {
			echo '<pre>';
			var_dump($item);
			echo '</pre>';
		}
	}
}

function predump()
{
	call_user_func_array('predump::predump', func_get_args());
}
