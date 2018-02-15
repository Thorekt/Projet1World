<?php
require_once 'header.php';
require_once 'inc/manager-db.php';
require_once 'inc/fct_affichage.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Homepage - Semantic</title>
    <link rel="stylesheet" type="text/css" href="semantic/components/accordion.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/ad.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/breadcrumb.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/button.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/card.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/checkbox.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/comment.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/container.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/dimmer.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/divider.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/embed.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/feed.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/flag.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/form.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/grid.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/header.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/icon.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/image.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/input.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/item.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/label.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/list.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/loader.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/menu.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/message.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/modal.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/nag.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/popup.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/progress.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/rail.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/rating.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/reset.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/reveal.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/search.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/segment.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/shape.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/site.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/statistic.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/step.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/sticky.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/tab.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/table.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/transition.css">
    <link rel="stylesheet" type="text/css" href="semantic/components/video.css">

    <!-- Regles CSS définies ou redéfinies, pour cette application -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script src="assets/library/jquery.min.js"></script>
    <script src="semantic/components/visibility.js"></script>
    <script src="semantic/components/sidebar.js"></script>
    <script src="semantic/components/transition.js"></script>
    <script>
        $(document)
            .ready(function () {
                console.log("execution de codes JS après chargement de la page");

                $('.ui.menu a.item')
                    .on('click', function () {
                        $(this)
                            .addClass('active')
                            .siblings().removeClass('active')
                        ;
                    })

                ;

                $('.ui.dropdown')
                    .dropdown()
                ;

                $('#search-select')
                    .dropdown()
                ;
            })
        ;

    </script>
</head>
<body>
<div class="ui pointing menu inverted fixed">

    <a class="item" href='index.php' id="home">
        GeoWorld
    </a>

    <div class="ui item floated dropdown secondary button">
        <span class="text">Continent<i class="dropdown icon"></i></span>
        <div class="menu">
            <a class="item" href="index.php?continent=Africa">Affrique</a>
            <a class="item" href="index.php?continent=Asia">Asie</a>
            <a class="item" href="index.php?continent=North America">Amérique du nord</a>
            <a class="item" href="index.php?continent=South America">Amérique du sud</a>
            <a class="item" href="index.php?continent=Europe">Europe</a>
            <a class="item" href="index.php?continent=Oceania">Oceanie</a>
        </div>
    </div>


    <div class="ui item floated dropdown secondary button">
        <span class="text">Ville</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <div class="header">Par Continent</div>
            <div class="ui left pointing dropdown item button">Affrique<i class="dropdown icon"></i>
                <div class="menu">
                    <div class="header">Par pays</div>
                    <!--<select class="ui search selection dropdown" id="search-select">
                        </?php $continent=getCountriesByContinent("Africa"); foreach ($continent as $pays):?>
                        <a class="item" href="liste_city.php?id=</?php echo("$pays->Name") ?> </a>
                        </?php endforeach; ?>
                    </select>-->
                </div>
            </div>
            <div class="item">
                <i class="dropdown icon"></i>
                <span class="text">Asie</span>
                <div class="menu">
                    <div class="header">Par Pays</div>
                </div>
            </div>
            <div class="item">
                <i class="dropdown icon"></i>
                <span class="text">Amérique du nord</span>
                <div class="menu">
                    <div class="header">Par Pays</div>
                </div>
            </div>
            <div class="item">
                <i class="dropdown icon"></i>
                <span class="text">Amérique du sud</span>
                <div class="menu">
                    <div class="header">Par Pays</div>
                </div>
            </div>
            <div class="item">
                <i class="dropdown icon"></i>
                <span class="text">Europe</span>
                <div class="menu">
                    <div class="header">Par Pays</div>
                </div>
            </div>
            <div class="item">
                <i class="dropdown icon"></i>
                <span class="text">Oceanie</span>
                <div class="menu">
                    <div class="header">Par Pays</div>
                </div>
            </div>
        </div>
    </div>


    <div class="right menu">
        <?php if (isset($grade)): ?>
            <a class="ui item" href="disc.php">
                Logout
            </a>
        <?php endif; ?>
        <?php if (isset($_SESSION['mail'])): ?>
            <a class="ui item" href="Gestion_acc.php">
                Gestion
            </a>
            <a class="ui item" href="disc.php">
                Logout
            </a>
        <?php endif; ?>
        <a class="item" href="todo-projet.php">
            ProjetPPE-SLAM
        </a>
        <div class="item">
            <div class="ui icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>

    </div>
</div>
