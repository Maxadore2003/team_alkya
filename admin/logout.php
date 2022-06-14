<?php

    session_start();
    $_SESSION["connected"] = null;
    session_destroy();
    header("Location: http://localhost/team_alkya/");

?>