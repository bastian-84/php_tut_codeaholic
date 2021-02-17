<?php

/* // Print current timestamp
echo time() . ' (shows the time stamp) <br />';
// Print current date
echo date('Y-m-d H:i:s') . '<br />';
// Print yesterday
echo date('Y-m-d H:i:s', (time() - 60 * 60 *24)) . '<br />';

// Different format: https://www.php.net/manual/en/function.date.php
echo date(' F j Y, H:i:s') . '<br />';
// String to timestamp
echo strtotime('now') . '<br />';
echo strtotime('+1 week') . '<br />'; */
// Parse date: https://www.php.net/manual/en/function.date-parse.php
/* $dateString = '2021-02-17 00:02:35';    // Declares date
$parseDate = date_parse($dateString);
echo '<pre>';
var_dump($parseDate);
echo '</pre>'; */
// Parse date from format
// https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 17 2021 00:02:35'; // non-default format

$parseDate = date_parse_from_format(' F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parseDate);
echo '</pre>';