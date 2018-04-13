<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 12/04/2018
 * Time: 11:45
 */

session_start();

if ($_SESSION["log"] == false) {
    header("location: ./log.php?co=noco");
    exit;
}

require_once "./assets/include/connexion.php";
include "./assets/include/function.php";

$my_command = "
SELECT
id_user,
id_command,
price
FROM
`command`
WHERE
`id_user` = :userId
;";

$stmt = $conn->prepare($my_command);
$stmt->bindValue(":userId", $_SESSION["user"]["id"]);
$stmt->execute();
m_header($conn);
?>

    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <p style="margin-top: 150px;">reference n° <?=$row['id_command']?> prix <?=$row['price']?> <a href="./assets/include/delete.php?id=<?=$row['id_command']?>">suprimer</a></p>
        <?php
            endwhile;
    m_footer();
    ?>
<script src="assets/js/accountVar.js"></script>




