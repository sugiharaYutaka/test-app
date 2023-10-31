<?php
require_once("header.php");
require_once("video.php");
$video = new Video();
$strkey = $video->loadStrkey($email);
?>
<div class="contets-menu mt-5">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-lg-2 xl-2">
                <form action = "insertLiveData.php">
                    <?php
                    echo '<p>配信タイトル<input class="textInput" placeholder="タイトル"></p>'.
                    '<p>ストリームキー<input class="textInput" readonly>'.$strkey.'</input></p>'.
                    '<button type="submit" value="配信を始める">';
                    ?>
                </form>
            </div>
        </div>
<?php
require_once("footer.php");
?>