<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>TnZ's Youtube Video Downloader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader" />
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	</head>
<body>
    
    <div class="jumbotron text-center">
    <h1>TnZ's Youtube Downloader</h1>
    <p>Easily Download Your Youtube Videos Now!</p> 
    </div>
    
    <div align="center">
        <form class="form-download" method="get" id="download" action="getvideo.php">
            <input type="text" class="form-control input-lg"  name="videoid" id="videoid" size="20" placeholder="VideoID" />
            <input class="btn btn-primary btn-lg" type="submit" name="type" id="type" value="Download" />
            <p>Put in just the ID bit, the part after v=.</p>
            <p>Example: http://www.youtube.com/watch?v=<b>Fw-BM-Mqgeg</b></p>

        <!-- @TODO: Prepend the base URI -->

        <?PHP
            include_once('config.php');

            function is_chrome(){

                $agent=$_SERVER['HTTP_USER_AGENT'];

                if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	// if user agent is google chrome
                    if(!strstr($agent, 'Iron')) // but not Iron
                        return true;
                }

                return false;	// if isn't chrome return false
            }

            if(($config['feature']['browserExtensions']==true)&&(is_chrome())) {
              echo '<a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a>';
            }
        ?>
        </form>
    </div>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
</body>
</html>
