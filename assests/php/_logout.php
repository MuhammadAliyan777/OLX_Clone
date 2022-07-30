<?php
session_start();
echo "You are logging out please wait..";
session_destroy();
header("Location: /olx/index.php?logoutindex=true")


?>