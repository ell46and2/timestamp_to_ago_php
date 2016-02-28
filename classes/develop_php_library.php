<?php
// Class for converting time to ago
class convertToAgo {

	function convert_datetime($str) {
		// list() is used to assign a list of variables in one operation.
		// explode — Split a string by string. 
		list($date, $time) = explode(' ', $str);
		list($year, $month, $day) = explode('-', $date);
		list($hour, $minute, $second) = explode(':', $time);
		// mktime — Get Unix timestamp for a date.
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		return $timestamp;
	}

	function makeAgo($timestamp) {
		$difference = time() - $timestamp; // difference between the current time and the timestamp
		$periods = array('sec', 'min', 'hr', 'day', 'week', 'month', 'year', 'decade');
		$lengths = array(1, 60, 60, 24, 7, 4.35, 12, 10);
		echo $difference;
		for($i=0; $difference>=$lengths[$i]; $i++) {
			$difference = $difference / $lengths[$i];
			$difference = round($difference);
			if($difference !=1) {
				$periods[$i] .= 's';
			};
			$text = $difference . ' ' . $periods[$i] . ' ago';
			
		}
		return $text;
	}
}