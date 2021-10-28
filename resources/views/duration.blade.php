<?php

    function getYouTubeVideoID($url)
    {
        $queryString=parse_url($url,PHP_URL_QUERY);
        parse_str($queryString,$params);
        if(isset($params['v']) && strlen($params['v'])>0)
        {
            return $params['v'];
        }
        else {
            return "";
        }
    }
    $video_url="https://www.youtube.com/watch?v=q2d-PwUISdQ";
    $api_key='AIzaSyCTmNKu-BRSEPoU_4lpG6NYnLo_MS5vc2w';
    $api_url='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.getYouTubeVideoID
    ($video_url).'&key='.$api_key;
    
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

