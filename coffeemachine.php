<!DOCTYPE HTML>
<html lang="sv">
<head>
<title>Kaffemaskin</title>
<?php
//Check if sent
if(isset($_POST['issubmit']) && $_POST['issubmit'] == 1){
$choice = $_POST['choice'];
$issubmit=1;
}
else{
$choice="";
$issubmit="0";
}
//RESULT
if ($choice == "K" || $choice == "k"){
echo "Här är kaffe";
}
else if ($choice =="T" || $choice == "t"){
echo "Här är Te";
}
else{
echo "Välj Kaffe eller TE!";
}
</head>
<body>
<form action="coffeemachine.php" method="post">
<input type="hidden" name="issubmit" value="1">
<p><input type="text" name="choice" placeholder="K/T"></p>
<p><input type="submit" value="brew"></p>
</form>
</body>
</html>
