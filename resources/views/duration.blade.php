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
//     if (strlen($time)>8)
//     {
//         echo $timeFormat->format('H:i:s');
// }   else {
// 	    echo $timeFormat->format('i:s');
// }

$total = array('1:00:00','00:01:20');


 $sum = strtotime('00:00:00');
 $sum2=0;  
 foreach ($total as $v){

        $sum1=strtotime($v)-$sum;

        $sum2 = $sum2+$sum1;
    }

    $sum3=$sum+$sum2;

     echo date("H:i:s",$sum3);

 





function ISO8601ToSeconds($ISO8601){
    $interval = new \DateInterval($ISO8601);

    return ($interval->d * 24 * 60 * 60) +
        ($interval->h * 60 * 60) +
        ($interval->i * 60) +
        $interval->s;
}

echo ISO8601ToSeconds('PT3M34S');