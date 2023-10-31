<?php
require_once __DIR__ . '/header.php';
?>


<div class="contets-menu body-margin-top">
    <div class="container-fluid">
        <?php
        require_once('video.php');
        $video = new Video();
        $video_data = $video->loadVideo();
        $thumb_loc = "https://www.academic-gihara0655.com/streaming/thumbnail/";
        //$video_loc = "https://www.academic-gihara0655.com/streaming/video/";
        $cnt = 0;
        foreach($video_data as $data)
        {
            $cnt = $cnt + 1;
            if($cnt == 1)
            {
                echo '<div class="row">';
            }
            echo '<div class="col-lg-4 text-center">'.
            '<div class="video-content border">'.
            '<a href="https://www.academic-gihara0655.com/streaming/test/videoplay.php'."?ID=".$data['ID'].'"><div class="imgBox"><img class="v-thumb" src="'.$thumb_loc.$data['thumbnail'].'"></div></a><br>'.
            '<p class="h5">'.$data['title'].'</p>'.
            '</div></div>';
            if($cnt == 3)
            {
                echo '</div>';
                $cnt = 0;
            }
            
        }
        ?>
    </div>
  </div>

<?php
require_once __DIR__ . '/footer.php';
?>