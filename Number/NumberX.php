<?php //*** NumberX ~ class » Rave™ Library © 2025 ∞ OE2i™ • www.oe2i.com ∞ Apache License ***//

namespace Rave\Number;

class NumberX
{
	// ◈ === isEven »
	public static function isEven($number)
	{
		return ($number % 2 == 0);
	}


	// ◈ === isOdd »
	public static function isOdd($number)
	{
		return (!self::isEven($number));
	}


	// ◈ === format → ... »
	public static function format($number, $decimal = 0, $separator = ',', $pointer = '.')
	{
		return number_format($number, $decimal, $pointer, $separator);
	}
}//> end of class ~ NumberX
