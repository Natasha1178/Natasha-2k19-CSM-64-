<?php
include"db.php";
//session_start();
$userInfo = $_SESSION["userInfo"][0];

$querys = mysqli_query($mysqli,"select name,email,password,photo,status from users where id!=$userInfo->id");

?>
<div class="container" style="margin:51px 0 0 -46px;background-color: pink;height: 100%;border-radius: 10px">
    <div class="row">
        <?php
        while ($rows = mysqli_fetch_object($querys)) {
        ?>
            <span><img src="uploads/<?=$rows->photo?>" width="50" height="50"></span>
            <span style="font-weight: bold"><?=$rows->name?></span>
            <?php
            if($rows->status == 1){
            ?>    
                <span>online</span>
            <?php
            }else{
            ?>    
                <span>offline</span>
            <hr>
        <?php
            }
        }
        ?>
    </div>    
</div>    