<?php 
echo 'bonjour '.date("Y")." ".getcwd()."<br>";
echo "<hr>";

$output=null;
$retval=null;
exec('echo %PATH%', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);


echo "<hr>";
// Affiche le nom d'utilisateur qui fait tourner le processus php/http
// (sur un système ayant "whoami" dans le chemin d'exécutables)
$output=null;
$retval=null;
//exec('ls -R -l /usr/bin/', $output, $retval);
//exec('ls -R -l /root', $output, $retval);

//exec('pwd', $output, $retval);
$command = escapeshellcmd('ls -l D:/www/phychiinfo/brouillons/exec');


$command = escapeshellcmd('ping www.google.com');

// $command = escapeshellcmd('C:/Users/Laurent/AppData/Local/Microsoft/WindowsApps/python.exe essai.py');
$command = escapeshellcmd('C:\Users\Laurent\AppData\Local\Microsoft\WindowsApps\python3.exe D:\www\phychiinfo\brouillons\exec\essai.py');


exec($command, $output, $retval);
echo "Returned with status $retval and output:\n";
foreach ($output as $k=>$v )
    echo $v."<br>";

echo "<hr>";

$test = shell_exec($command);
echo $test;