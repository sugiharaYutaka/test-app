<?php
require_once("header.php");
require_once("database.php");
$db = new Database();
$items = $db->getAccountData($_SESSION["email"]);
$strkey = $items['streamKey'];
$URL_share = "https://www.academic-gihara0655.com/streaming/test/videolive.php?ID=".$items['ID'];
if(isset($_GET['ID']))
{
  
  $data = $db->getAccountDataFromID($_GET['ID']);
  $strkey = $data['streamKey'];
}
?>

<script src="//cdn.jsdelivr.net/hls.js/latest/hls.min.js"></script>

<div class="contets-menu body-margin-top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1 col-xl-1 margin"></div>
      <div class="col-lg-8 col-xl-8 d-flex justify-content-end">
        <?php
          echo '<div class="border" style="width:100%;" >'.
            '<video class="rounded-3 ratio ratio-16x9" id="video" style="width:100%;" class="video-js vjs-default-skin"'.
            'src="https://www.academic-gihara0655.com/streaming/test/'.$strkey.'.m3u8" controls autoplay>'.

            '<script type="text/javascript">'.
            'if(Hls.isSupported)'.
            '{var src = "https://www.academic-gihara0655.com/streaming/test/'.$strkey.'.m3u8";'.
            'var video = document.getElementById("video");'.
            'var hls = new Hls();'.
            'hls.loadSource(src);'.
            'hls.attachMedia(video);'.
            'video.play();}'.
            '</script>'.

            '</video>'.
            '<br>'.
            //'<p class="h5" style="text-align:left">'.$items['title'].'</p>'.
            '<button onclick = "copy()">共有用リンクをコピー</button><textarea row="1">'.$URL_share.'</textarea>'.

            '</div>';
          ?>
      </div>
      <div class="col-lg-4 col-xl-3">
        <iframe  frameborder=0 class="border" style="height:100%; width:100%;" src="comment.html"></iframe>
      </div>
    </div>
  </div>
</div>
<script>
  function copy() {
    var text = document.getElementsByTagName("textarea")[0];
    text.select();
    document.execCommand("copy");
  }
</script>
<?php
require_once("footer.php")
?>
