<?php
session_start();
session_destroy();
if (session_start() && session_destroy()) {
    include "./script/alert.php";
    echo "<script>logoutsuccess(); </script> ";
}