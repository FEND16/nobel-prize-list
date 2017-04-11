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