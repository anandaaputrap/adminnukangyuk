<?php
if (! function_exists('toRp'))
{
	function toRp($parm)
	{
		return 'Rp. ' . number_format( floatval($parm), 0 , ',' , '.' ) . '';//,00
	}
}

if (!function_exists('replaceRpSeparator')) {
	function replaceRpSeparator($nilai)
	{
		return str_replace('Rp', "", str_replace(',', '', $nilai));
	}
}

if (!function_exists('replaceRp')) {
	function replaceRp($nilai)
	{
		return str_replace('Rp', "", str_replace('.', '', $nilai));
	}
}
?>