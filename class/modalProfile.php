<div class="modal fade" id="modalProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                    if(isset($_SESSION['email']) && $_SESSION['email'] != '')
                    {
                        echo '<h5 class="modal-title" id="exampleModalLabel">'.$_SESSION['email'].'</h5>';
                    }
                    else
                    {
                        echo '<h5 class="modal-title" id="exampleModalLabel">ログインしていません</h5>';
                    }
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
      
                <div class="container-fluid">
                    <div class="row">
                        <a href="videolive.php" class="btn border-top border-bottom my-2">配信</a><br>
                            <?php
                                if(isset($_SESSION['email']) && $_SESSION['email'] != '')
                                {
                                    echo '<a href="profile.php" class="btn border-top border-bottom my-2">アカウント設定</a><br>';
                                    echo '<a href="logoff.php" class="btn border-top border-bottom my-2">ログアウト</a><br>';
                                }
                                else
                                {
                                    echo '<a href="loginPage.php" class="btn border-top border-bottom my-2" >ログイン</a><br>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
