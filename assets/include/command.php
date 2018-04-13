<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 11/04/2018
 * Time: 11:39
 */

require_once "./connexion.php";
session_start();

$sql = "
INSERT INTO `command`
SET
`id_user` = :userId,
`BOrne` = :BOrne,
`Banque` = :Banque,
`BanqueEnseigne` = :BanqueEnseigne,
`Berrobi` = :Berrobi,
`ChaiseHaute` = :ChaiseHaute,
`ChaiseS` = :ChaiseS,
`Ipad` = :Ipad,
`Kakemono` = :Kakemono,
`Kirro` = :Kirro,
`LeCroise` = :LeCroise,
`Mur` = :Mur,
`MurImage` = :MurImage,
`MurMosaique` = :MurMosaique,
`PorteDocu` = :PorteDocu,
`PorteDocuOri` = :PorteDocuOri,
`Tables` = :Tables,
`TotemImage` = :TotemImage,
`Victorio` = :Victorio,
`price` = :price
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':userId', intval($_SESSION["user"]['id']));
$stmt->bindValue(':BOrne', intval($_POST["BOrne"]));
$stmt->bindValue(':Banque', intval($_POST["Banque"]));
$stmt->bindValue(':BanqueEnseigne', intval($_POST["BanqueEnseigne"]));
$stmt->bindValue(':Berrobi', intval($_POST["Berrobi"]));
$stmt->bindValue(':ChaiseHaute', intval($_POST["ChaiseHaute"]));
$stmt->bindValue(':ChaiseS', intval($_POST["ChaiseS"]));
$stmt->bindValue(':Ipad', intval($_POST["Ipad"]));
$stmt->bindValue(':Kakemono', intval($_POST["Kakemono"]));
$stmt->bindValue(':Kirro', intval($_POST["Kirro"]));
$stmt->bindValue(':LeCroise', intval($_POST["LeCroise"]));
$stmt->bindValue(':Mur', intval($_POST["Mur"]));
$stmt->bindValue(':MurImage', intval($_POST["MurImage"]));
$stmt->bindValue(':MurMosaique', intval($_POST["MurMosaique"]));
$stmt->bindValue(':PorteDocu', intval($_POST["PorteDocu"]));
$stmt->bindValue(':PorteDocuOri', intval($_POST["PorteDocuOri"]));
$stmt->bindValue(':Tables', intval($_POST["Tables"]));
$stmt->bindValue(':TotemImage', intval($_POST["TotemImage"]));
$stmt->bindValue(':Victorio',intval($_POST["Victorio"]));
$stmt->bindValue(':price', intval($_POST["price"]));
$stmt->execute();

header("location: ../../index.php");
exit;