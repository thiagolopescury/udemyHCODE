<?php
require_once("config.php");


echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo " As sessões estao desabilitadas";
        break;

    case PHP_SESSION_NONE:
        echo " As sessões estao habilitadas,porem inativas";
        break;

    case PHP_SESSION_ACTIVE :
        echo " As sessões estao ativas e habilitadas";
        break;
}
