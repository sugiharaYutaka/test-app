<?php
require_once("header.php");
require_once("video.php");
$ID = $_GET['ID'];
$video = new Video();
$items = $video->loadVideoData($ID);
?>

<script src="//cdn.jsdelivr.net/hls.js/latest/hls.min.js"></script>

<div class="contets-menu body-margin-top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1 col-xl-1 margin"></div>
      <div class="col-lg-8 col-xl-8 d-flex justify-content-end">
        <?php
          echo '<div class="border" style="width:100%;" >'.
            '<video class="rounded-3" id="video" class="video-js vjs-default-skin"'.
            'src="https://www.academic-gihara0655.com/streaming/video/'.$items['video'].'" style="width:100%;"  controls autoplay>'.
            '</video>'.
            '<br>'.
            '<p class="h5" style="text-align:left">'.$items['title'].'</p>'.
            '</div>';
          ?>
      </div>
      <div class="col-lg-4 col-xl-3">
        <iframe  frameborder=0 class="border" style="height:100%; width:100%;" src="comment.html"></iframe>
      </div>
    </div>
  </div>
</div>

<?php
require_once("footer.php")
?>