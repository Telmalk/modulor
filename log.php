<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 12/04/2018
 * Time: 10:52
 */

include "./assets/include/function.php";

session_start();
m_header();
?>
    <form style="margin-top: 100px;" method="post" action="./assets/include/doLogin.php">
        <input type="text" name="name">
        <input type="text" name="password">
        <button type="submit">valider</button>
    </form>
<?php
    m_footer();
    ?>

