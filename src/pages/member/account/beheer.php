<?php
$user = $_SESSION['user'];

?>
<div class="container">
    <form action="" method="post">
        Account Beheren
        <div class="form-group">
            <input type="text" name="updateName" class="form-control" value="<?=$user->getName()?>">
        </div>
        <div class="form-group">
            <input type="text" name="updateEmail" class="form-control" value="<?=$user->getEmail()?>">
        </div>
        <div class="form-group">
            <input type="password" name="updatePassword" class="form-control" value="<?=$user->getPasswordHash()?>">
        </div>
        <div class="form-group">
            <input type="submit" name="update" class="form-control btn" value="Update">
        </div>
    </form>
</div>