<?php
session_start();
require_once './header.php';
if (is_connected() == false) {
    session_destroy();
    redirect('./connect.php');
}
$data = getAUTH($_SESSION['mail'], $_SESSION['pswd']);
?>
<!DOCTYPE html>
<div class="ui container main">
    <div class="ui one column grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red ribbon label">Gestion du compte</a>
                <form class="ui form success error" method="post" action="./inc/traitement_GestAcc.php">
                    <div class="field">
                        <label>Nom : </label>
                        <input class="" type="text" name="nom" placeholder="<?php echo $data['Nom'] ?>"/><br/>
                        <label>Prenom : </label>
                        <input class="" type="text" name="pren" placeholder="<?php echo $data['Prenom'] ?>"/><br/>
                        <label>Mail : </label>
                        <input class="" type="email" name="mail" placeholder="<?php echo $data['Mail'] ?>"/><br/>
                        <label>Mot de passe : </label>
                        <input class="" type="password" name="pswd"/><br/>
                    </div>
                    <input class="bouton" type="submit" name="env" value="Valider">
                </form>


            </div>
        </div>
    </div>
</div>

<?php
require_once './javascripts.php';
require_once './footer.php';
?>
