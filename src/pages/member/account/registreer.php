<form method="post">
    <label>
        gebruikersnaam:
        <input type="text" name="name" required>
    </label>

    <label>
        E-mail:
        <input type="text" name="mail" required>
    </label>

    <label>
        geboortedatum:
        <input type="date" name="date" required>
    </label>

    <label>
        telefoonnummer:
        <input type="text" name="phoneNumber" required>
    </label>

    <label>
        wachtwoord:
        <input type="password" name="password" required>
    </label>

    <label>
        wachtwoord herhalen:
        <input type="password" name="passwordRepeat" required>
    </label>

    <input type="submit" name="register" value="registreren" required>

</form>

<?php
if(!empty($_POST)){
    if($_POST['password'] == $_POST['passwordRepeat']){
        $pUser = User::check($_POST['name']);
        if($pUser == null){
            $user = User::register($_POST['name'], $_POST['password'], 1);
        }
    }
    header('Location:'.ROOT );
}
unset($_POST);

?>