<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
</head>
<body>

<h3>Business Computer</h3>
<p align="center">KRU</p>

<?php
   echo "Business Computer";
   echo "<br>";
   for($count=0;$count<=5;$count++)
   {
       echo "Kanchanaburi<br>";
   }
   echo"<form name=\"register\" method=\"POST\" action=\"test.php\">";
   echo"<input type=\"submit\" value=\"Send\"/>";
   echo"</form>";
?>
</body>
</html>