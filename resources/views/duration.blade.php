<?php

$video_url="https://www.youtube.com/watch?v=q2d-PwUISdQ";
 $api_key='AIzaSyCTmNKu-BRSEPoU_4lpG6NYnLo_MS5vc2w';
parse_str( parse_url( $video_url, PHP_URL_QUERY ), $my_array_of_vars );
    
  // Output: C4kxS1ksqtw





    $api_url='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.$my_array_of_vars['v'].'&key='.$api_key;
    
    $data=json_decode(file_get_contents($api_url));

   
     
    $time=$data->items[0]->contentDetails->duration;

function covtime($time){
    $start = new DateTime('@0'); // Unix epoch
    $start->add(new DateInterval($time));
    if (strlen($time)>8)
    {
    return $time=$start->format('g:i:s');
}   else {
	return $time=$start->format('i:s');
}
}

echo covtime($time);