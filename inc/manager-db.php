<?php
require_once 'connect-db.php';

/** Obtenir la liste de tous les pays référencés d'un continent donné
 * @param $continent le nom d'un continent
 * @return tableau d'objets (des pays)
 */
function getCountriesByContinent($continent)
{
    // pour utiliser la variable globale dans la fonction
    global $pdo;
    $query = 'SELECT * FROM Country WHERE Continent = :continent;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':continent', $continent, PDO::PARAM_STR);
    $prep->execute();
    // var_dump($prep);
    // var_dump($continent);
    return $prep->fetchAll();
}

/** Obtenir la liste des pays
 * @return liste d'objets
 */
function getAllCountries()
{
    global $pdo;
    $query = 'SELECT * FROM Country;';
    return $pdo->query($query)->fetchAll();
}

/** Obtenir les infos d'un pays
 * @return liste d'infos
 */
function getOneContry($idCountry)
{
    global $pdo;
    $query = 'SELECT * FROM Country WHERE id = :idCountry';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':idCountry', $idCountry, PDO::PARAM_INT);
    $prep->execute();
    //var_dump($prep);
    //var_dump($idCountry);
    return $prep->fetchAll();
}

function getOneCity($idCity)
{
    global $pdo;
    $query = 'SELECT Name FROM City WHERE id = :idCity';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':idCity', $idCity, PDO::PARAM_INT);
    $prep->execute();
    return $prep->fetch();
}

function getAUTH($mail, $pswd)
{
    global $pdo;
    $query = 'SELECT * FROM USER_SITE WHERE Mail=:mail AND PSWD=:pswd;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':mail', $mail, PDO::PARAM_STR);
    $prep->bindValue(':pswd', $pswd, PDO::PARAM_STR);
    $prep->execute();

    if ($prep->rowCount() == 1) {
        $result = $prep->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function inscr($mail, $pswd, $nom, $pren)
{
    global $pdo;
    $query = 'INSERT INTO USER_SITE(Nom,Prenom,Mail,PSWD) VALUES (:nom,:pren,:mail,:pswd) ;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':mail', $mail, PDO::PARAM_STR);
    $prep->bindValue(':pswd', $pswd, PDO::PARAM_STR);
    $prep->bindValue(':nom', $nom, PDO::PARAM_STR);
    $prep->bindValue(':pren', $pren, PDO::PARAM_STR);
    $prep->execute();
    return;
}

function udpAcc($ID_u, $mail, $pswd, $nom, $pren)
{
    global $pdo;
    $query = 'UPDATE USER_SITE SET Mail=:mail AND PSWD=:pswd AND Nom=:nom AND Prenom=:pren WHERE ID_u=:ID_u;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':ID_u', $ID_u, PDO::PARAM_INT);
    $prep->bindValue(':mail', $mail, PDO::PARAM_STR);
    $prep->bindValue(':pswd', $pswd, PDO::PARAM_STR);
    $prep->bindValue(':nom', $nom, PDO::PARAM_STR);
    $prep->bindValue(':pren', $pren, PDO::PARAM_STR);
    $prep->execute();
    return;
}

function getGrade($ID_u)
{
    global $pdo;
    $query = $query = 'SELECT ID_grade FROM USER_GRADE WHERE id_user=:ID_u;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':ID_u', $ID_u, PDO::PARAM_INT);
    $prep->execute();
    return $prep->fetchAll();
}

function is_connected()
{
    $iscon = false;
    if (isset ($_SESSION['mail']) and isset($_SESSION['pswd'])) {
        if (getAUTH($_SESSION['mail'], $_SESSION['pswd']) != false) {
            $iscon = true;
        }
    }
    return ($iscon);
}

