<html>
<body>

<h2> Communique Sent </h2>

<a href="/index.html" > <h3> Back to Main Page </h3> </a>

<?php 
include "class.growl.php";
$myfile = fopen("/Library/WebServer/Documents/data/AllCommuniques.txt","a");
$txt1 = "China";
$txt2 = $_GET["message"];
fwrite($myfile,$txt1);
fwrite($myfile,",");
fwrite($myfile,$txt2);
fwrite($myfile,"\n");
fclose($myfile);
// Setup
$growl = new Growl();
$growl->setAddress('127.0.0.1');
$growl->addNotification("Test");
$growl->register();

// Send Notification

$growl->notify("Communique Recvd", "Communique", $txt1);

?>

</body>
</html>