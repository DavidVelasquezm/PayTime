<?php
session_start();
session_unset();
session_destroy();
@setCookie("Usuario","Finished",time() + 3600, "/");
echo "ok";
?>