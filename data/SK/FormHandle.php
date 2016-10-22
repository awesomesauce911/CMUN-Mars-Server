<html>
<body>

<h2> Communique Sent </h2>

<a href="/index.html" > <h3> Back to Main Page </h3> </a>
 
<?php 

$myfile = fopen("/Library/WebServer/Documents/data/AllCommuniques.txt","a");
$txt1 = "South Korea";
$txt2 = $_GET["message"];
fwrite($myfile,$txt1);
fwrite($myfile,",");
fwrite($myfile,$txt2);
fwrite($myfile,"\n");
fclose($myfile);

?>

</body>
</html>