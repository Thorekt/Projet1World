<?php
require_once 'header.php';
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
?>
<div class="ui container main">
    <div class="ui two column middle aligned very relaxed strapped grid">
        <div class="column">
            <div class="ui form">
                <a class="ui red ribbon label">Login</a>
                <?php if (isset($code)): ?>
                    <?php if ($code == 2): ?>
                        <h1>champs mal remplis</h1>
                    <?php endif; ?>
                    <?php if ($code == 3): ?>
                        <h1>Vous vous etes déconnecté</h1>
                    <?php endif; ?>
                <?php endif; ?>
                <form class="ui form success error" method="post" action="traitement_conn.php">
                    <div class="field">
                        <label>Mail : </label>
                        <input class="" type="email" name="mail" placeholder="Mail"/><br/>
                        <label>Mot de passe : </label>
                        <input class="" type="password" name="pswd" placeholder="Mot de passe"/><br/>
                    </div>
                    <input class="bouton" type="submit" name="env" value="Se connecter">
                </form>
            </div>
        </div>
        <div class="ui vertical divider">OU</div>
        <div class="center aligned column">
            <a class="ui red ribbon label">Inscription</a>
            <?php if (isset($code)): ?>
                <?php if ($code == 0): ?>
                    <h1>Inscription validée</h1>
                <?php endif; ?>
                <?php if ($code == 1): ?>
                    <h1>champs mal remplis</h1>
                <?php endif; ?>
            <?php endif; ?>
            <form class="ui form success error" method="post" action="traitement_inscr.php">
                <div class="field">
                    <label>Nom : </label>
                    <input class="" type="text" name="nom" placeholder="Nom"/><br/>
                    <label>Prenom : </label>
                    <input class="" type="text" name="pren" placeholder="Prenom"/><br/>
                    <label>Mail : </label>
                    <input class="" type="email" name="mail" placeholder="Mail"/><br/>
                    <label>Mot de passe : </label>
                    <input class="" type="password" name="pswd" placeholder="Mot de passe"/><br/>
                </div>
                <input class="bouton" type="submit" name="env" value="S'inscrire">
            </form>
        </div>

    </div>
</div>
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
