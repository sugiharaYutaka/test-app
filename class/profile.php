<?php
require_once("header.php");
require_once("database.php");
$db = new Database();
$items = $db->getAccountData($_SESSION['email']);
?>
<br>

<div class="contets-menu mt-5">
    <div class="container-fluid d-flex justify-content-center border">
        <br>
        <form action = "https://www.academic-gihara0655.com/streaming/profile/icon/getUploadIcon.php" method="POST" enctype="multipart/form-data">
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6 ">ユーザーネーム</label>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <?php
                        echo '<input class="form-control" type="text" id="userName" name="name" value="'.$items['userName'].'">';
                    ?>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6">メールアドレス</label>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <?php
                        echo '<input class="form-control" type="text" id="emailAddress" name="email" value="'.$items['email'].'" readonly>';
                    ?>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6">ストリームキー</label>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <?php
                        echo '<input class="form-control" type="text" id="passConfirm" name="pass_confirm" value="'.$items['streamKey'].'"readonly>';
                    ?>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6">アイコン(5MB未満)</label>
                </div>
                <div class="col-lg-6 col-xl-6 custom-file">
                    <div class="custom-file">
                        <input id="iconUpload" type="file" accept="image/*" class="form-control" name = "icon" >
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="col-lg-6 col-xl-6 d-flex justify-content-end">
                    <input class="btn btn-secondary" type="submit" name="btn" value="変更">
                </div>
            </div>
        </form>
    </div>
<?php
require_once("footer.php")
?>
