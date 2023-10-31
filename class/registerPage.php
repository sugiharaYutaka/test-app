<?php
require_once("header.php");
?>
<br>
<div class="contets-menu body-margin-top">
    <div class="container-fluid d-flex justify-content-center border">
        <form action="register.php" method="POST">
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6">ユーザーネーム</label>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <input class="form-control" type="text" id="userName" name="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6">メールアドレス</label>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <input class="form-control" type="text"  id="emailAddress" name="email" required>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6">パスワード</label>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <input class="form-control" type="password"  id="pass" name="pass" required>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-lg-6 col-xl-6">
                    <label class="h6">パスワード(確認 未実装)</label>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <input class="form-control" type="password" id="passConfirm" name="pass_confirm">
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="col-lg-6 col-xl-6 d-flex justify-content-end">
                    <input class="btn btn-outline-secondary fw-bold" type="submit" name="btn" value="登録">
                </div>
            </div>
            
        </form>
    </div>

<?php
require_once("footer.php");
?>