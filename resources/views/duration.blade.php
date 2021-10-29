<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube API</title>
</head>
<body>
    YouTube Subscribers
    <div id="subscriberCount"></div>
    YouTube Video Views
    <div id="viewCount"></div>
    YouTube Video Count
    <div id="videoCount"></div>
    <script>
    
    const APIKey = 'AIzaSyCTmNKu-BRSEPoU_4lpG6NYnLo_MS5vc2w';
    const Userid = 'UCmxbJnfPv6LCFH9zLaqGKEg';
    const subscriberCount= document.getElementById('subscriberCount');
    const viewCount = document.getElementById('viewCount');
    const videoCount = document.getElementById('videoCount');
   
    let getdata = () => {
        fetch(`https://www.googleapis.com/youtube/v3/channels?part=statistics&id=${Userid}&key=${APIKey}`)
        .then(response => {
            return response.json()
        })
        .then(data => {
            console.log(data);
            subscriberCount.innerHTML = data["items"][0].statistics.subscriberCount;
            viewCount.innerHTML = data["items"][0].statistics.viewCount;
            videoCount.innerHTML = data["items"][0].statistics.videoCount;
            
        })
    }
   getdata();
    </script>
</body>
</html>