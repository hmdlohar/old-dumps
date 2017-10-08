<?php
echo date('h:i:s') . "<br>";
echo shell_exec("gksu pcmanfm");
echo shell_exec("./down.sh");

//sleep for 5 seconds
sleep(2);
echo shell_exec("nmcli c up uuid e0bafaf9-389c-4c86-915f-fa22f9fdad92");
//start again
echo date('h:i:s');
?>