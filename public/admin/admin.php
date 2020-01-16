<?php include("$_SERVER[DOCUMENT_ROOT]/head.php"); ?>
<div id="admin">
    <h1>Admin</h1>

    <form method="post" action="../general/register.php">
        <label for="adminUser"><input type="text" name="username" id="adminUser" placeholder="Benutzername"></label>
        <label for="adminPass"><input type="password" name="password" id="adminPass" placeholder="Passwort"></label>
        <input type="submit" value="einloggen" name="adminLogin">
        <input type="submit" value="Registrieren" name="adminRegister">
    </form>
</div>
<?php include("$_SERVER[DOCUMENT_ROOT]/footer.php"); ?>