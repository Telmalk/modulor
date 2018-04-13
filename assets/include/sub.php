<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 13/04/2018
 * Time: 01:50
 */


session_start();
?>

<form method="post" action="./addUser.php">
    <input type="text" name="userName">
    <input type="text" name="password">
    <input type="text" name="adress">
    <input type="text" name="mail">
    <button type="submit">valider</button>
</form>
