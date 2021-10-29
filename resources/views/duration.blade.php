<?php

$video_url="https://www.youtube.com/watch?v=f5f9tRx4nLU&list=RD3eJMovcItXg&index=23";
 $api_key='AIzaSyCTmNKu-BRSEPoU_4lpG6NYnLo_MS5vc2w';
parse_str( parse_url( $video_url, PHP_URL_QUERY ), $my_array_of_vars );
    
  // Output: C4kxS1ksqtw





    $api_url='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.$my_array_of_vars['v'].'&key='.$api_key;
    
    $data=json_decode(file_get_contents($api_url));

    $time=$data->items[0]->contentDetails->duration;

    $timeFormat = new DateTime('1970-01-01');
    $timeFormat->add(new DateInterval($time));
    if (strlen($time)>8)
    {
        echo $timeFormat->format('H:i:s');
}   else {
	    echo $timeFormat->format('i:s');
}

$a = array('00:20:02', '00:03:45','01:00:45');
$h = $m = $s = 0;
foreach ($a as $time) {
    $time = new \DateTime($time);
    $h += $time->format('H');
    $m += $time->format('i');
    $s += $time->format('s');
}

$interval = new DateInterval("PT{$h}H{$m}M{$s}S");
echo $interval->format('%H:%I:%S');





