<?php
/* Permet de savoir si on affiche les pays d'un ou non
    @return une chaine de caractere
*/
function continentOrNot($continent)
{
    if (isset($continent)) {
        return ("$continent");
    } else {
        return ("Les pays du monde:");
    }
}


/* Permet de savoir si un champs est vide ou non
      @return une chaine de caracteres
    */
function champsVideOrNot($champs)
{
    {
        if (isset($champs)) {
            return $champs;
        } else {
            return ("N/A");
        }
    }
}

function redirect($page)
{
    echo "<script type='text/javascript'>document.location.replace('" . $page . "');</script>";
}
