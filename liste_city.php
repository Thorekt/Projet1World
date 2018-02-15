
<?php
    require_once 'header.php';
    if(is_connected()== false){
        session_destroy();
        redirect('connect.php');
    }
    $continent=$_GET['continent'];
    $payscont = getCountriesByContinent($continent);
?>
    <div class="ui container main">
        <h1><?php echo continentOrNot($continent)?></h1>
        <div class="ui one column grid">
            <div class="column">
                <div class="ui raised segment">
                    <a class="ui red ribbon label">Tableau des pays </a>

                    <table class="ui celled structured striped table">
                        <thead>
                        <th class="single line center aligned">Nom</th>
                        <th class="single line center aligned">Surface</th>
                        <th class="single line center aligned">Population</th>
                        </thead>
                        <tbody>
                        <?php foreach ($payscont as $pays): ?>
                            <tr class='center aligned'>
                                <td><a href="country.php?id=<?php echo ("$pays->id")?>"><?php echo ("$pays->Name") ?> </a></td>
                                <td class='right aligned'><?php echo champsVideOrNot("$pays->SurfaceArea km²") ?>  </td>
                                <td class='right aligned'><?php echo champsVideOrNot("$pays->Population d'hab") ?> </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>