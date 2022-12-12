<div class="text-center container">
    <form method="post" class="form-signin">
        <img class="mb-4" src="<?= ROOT ?>/img/loper.png" width="100vh" height="100vh">
        <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
        <label for="inputName" class="sr-only"></label>   
        <input type="text" id="inputName" class="form-control" placeholder="Naam" name="name" required autofocus="">
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="login">Inloggen</button>
    </form>    
</div>

<?php
if (!empty($_POST)) 
{
    $user = User::login($_POST['name'], $_POST['password'] );

    if(isset($user))
    {
        $_SESSION['user'] = $user;
        echo "succes";
        header('Location:'.ROOT );
    }
    
}


?>
