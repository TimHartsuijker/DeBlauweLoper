<?php
$user = $_SESSION['user'];

if(!empty($_POST))
{   
    $user = User::updateUser($user->getId(), $_POST['name'], $_POST['mail'], "0612345678" , "2022/02/02", $_POST['password'], 1);

    $_SESSION['user'] = $user;
    header("Location: ". PATH);  
    exit;
}
?>
<div class="container">
    <form action="" method="post">
        Account Beheren
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="<?=$user->getName()?>">
        </div>
        <div class="form-group">
            <input type="text" name="mail" class="form-control" value="<?=$user->getEmail()?>">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" value="<?=$user->getPasswordHash()?>">
        </div>
        <div class="form-group">
            <input type="submit" name="update" class="form-control btn" value="Update">
        </div>
    </form>
</div>