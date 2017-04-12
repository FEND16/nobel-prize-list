<?php
/**
 * Helper function to format date from:
 * 1845-03-27  ---->  Mon 27/3 1845
 * @param  string $date string in any date-format
 * @return string       string in format 'Mon 27/3 1845' (D j/n Y)
 */
function formatDate($date){
  $newDate = strtotime($date);
  $newFormat = date('D j/n Y', $newDate);
  echo $newFormat;
}

//strtotime — Parse about any English textual datetime description into a Unix timestamp
//input: time. A date/time string. 

//D	A textual representation of a day, three letters	Mon through Sun
//j	Day of the month without leading zeros	1 to 31
//n	Numeric representation of a month, without leading zeros	1 through 12
//Y	A full numeric representation of a year, 4 digits	Examples: 1999 or 2003
//I.e. Tue 11/4 2017