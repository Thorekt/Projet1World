<?php
require_once 'header.php';
if (is_connected() == false) {
    session_destroy();
    redirect('connect.php');
}
if (isset($_GET['id'])) {
    $idCountry = $_GET['id'];
} else {
    redirect('index.php');
}
$pays = getOneContry($idCountry);
?>
<div class="ui container main">
    <h1><i class="<?php echo strtolower($pays[0]->Code2 . " flag") ?>"></i><?php echo $pays[0]->Name ?></h1>
    <div class="ui one column grid">
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red ribbon label">Tableau du pays </a>
                <div>
                    <table class="ui celled structured striped table">
                        <thead>
                        <th class="single line center aligned">Nom local</th>
                        <th class="center aligned">Capitale</th>
                        <th class="center aligned">Continent</th>
                        <th class="center aligned">Surface</th>
                        <th class="center aligned">Population</th>
                        <th class="center aligned">Region</th>
                        <th class="center aligned">Date de l'indépendance</th>
                        </thead>
                        <tbody>
                        <tr class='center aligned'>
                            <td><?php echo champsVideOrNot($pays[0]->LocalName) ?> </td>
                            <td>
                                <a href="liste_city.php?id=<?php echo($pays[0]->Capital) ?>"><?php echo(getOneCity($pays[0]->Capital)->Name) ?> </a>
                            </td>
                            <td><?php echo champsVideOrNot($pays[0]->Continent) ?> </td>
                            <td class='right aligned'><?php echo champsVideOrNot($pays[0]->SurfaceArea . " km²") ?>  </td>
                            <td class='right aligned'><?php echo champsVideOrNot($pays[0]->Population . " d'hab") ?> </td>
                            <td><?php echo champsVideOrNot($pays[0]->Region) ?> </td>
                            <td><?php echo champsVideOrNot($pays[0]->IndepYear) ?> </td>

                        </tr>
                        </tbody>
                    </table>
                    <table class="ui celled structured striped table">
                        <thead>
                        <th class="single line center aligned">PIB</th>
                        <th class="center aligned">Ancien PIB</th>
                        <th class="center aligned">Forme de gouvernement</th>
                        <th class="center aligned">Durée de vie moyenne</th>
                        </thead>
                        <tbody>
                        <tr class='center aligned'>
                            <td><?php echo champsVideOrNot($pays[0]->GNP) ?> </td>
                            <td><?php echo champsVideOrNot($pays[0]->GNPOld) ?> </td>
                            <td><?php echo champsVideOrNot($pays[0]->GovernmentForm) ?> </td>
                            <td><?php echo champsVideOrNot($pays[0]->LifeExpectancy) ?> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
