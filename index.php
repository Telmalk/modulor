<?php
require_once "./assets/include/connexion.php";
include "./assets/include/function.php";

session_start();

$user = $_SESSION["user"];

if (isset($user["name"]) && isset($user["email"]) && isset($user["adress"])) {
    $_SESSION["log"] = true;
} else {
    $_SESSION["log"] = false;
}

m_header($conn);
mt_main();
mt_footer();

?>
<script src="assets/js/accountVar.js"></script>
<script src="assets/js/main.js"></script>

