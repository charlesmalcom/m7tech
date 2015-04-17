<?php

$year = $this->config->item('curr_year');
$month = $this->config->item('curr_month');
$day = $this->config->item('curr_day');

$baseURL = $this->config->item('baseURL');

/*
    $calendarData = array(
        3  => $baseURL.'news/article/'.$year.'/03/',
        7  => 'http://example.com/news/article/2006/07/',
        13 => 'http://example.com/news/article/2006/13/',
        26 => 'http://example.com/news/article/2006/26/'
    );

*/


//echo $this->calendar->generate(2015, 2, $calendarData);             /* INITIALIZE THE CLASS */
echo $this->calendar->generate(2015, 2);                          /* INITIALIZE THE CLASS */
//echo $this->calendar->generate($year, $month, $calendarData);     /* INITIALIZE THE CLASS */

//echo $this->calendar->generate();                                 /* INITIALIZE THE CLASS */

echo"<br /><br />";