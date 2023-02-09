<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

/* now destroying the session id */

if (isset($_SESSION['numMemb'])) {
    $_SESSION = array();
    unset($_SESSION);
    session_destroy();

    header('Location: ../../../index.php?error=4');
}

