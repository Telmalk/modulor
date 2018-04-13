<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 12/04/2018
 * Time: 10:52
 */

include "./function.php";

session_start();
?>
    <form method="post" action="./doLogin.php">
        <input type="text" name="name">
        <input type="text" name="password">
        <button type="submit">valider</button>
    </form>

