<!DOCTYPE HTML>
<html lang="sv">
<head>
<title>Kaffemaskin</title>
  </head>
  <body>
  <?php
//Check if sent
if(isset($_POST['issubmit']) && $_POST['issubmit'] == 1){
$choice = $_POST['choice'];
$issubmit=1;
}
else{
$choice="";
$issubmit="0";
?>
<form action="coffeemachine.php" method="post">
<input type="hidden" name="issubmit" value="1">
<input type="text" name="choice" placeholder="K/T">
<input type="submit" value="brew">
</form>  
}
<?php    
//RESULT
if ($issubmit == 1){
if ($choice == "K" || $choice == "k"){
echo "Här är kaffe";
if ($extrachoice == "milk"){
echo "Kaffe med mjölk";
}
elseif ($extrachoice =="sugar") {
echo "Kaffe med socker";
}
else 
?>
<form action="coffeemachine.php" method="post">
  <input type="hidden" name="issubmit" value="1">
  <input type="hidden" name="issubmitextra" value="1">
  <input type="hidden" name"choice" value= <?php echo $choice; ?>>
  välj mjölk
  <input type="radio" id="milk" name="extra" value="milk">
  <label for="milk">Mjölk</label><br>
  Eller socker
  <input type="radio" id="sugar" name="extra" value="sugar">
  <label for="sugar">Socker</label><br>
  <input type="submit" name="send">
 </form>
}
<?php    
else if ($choice =="T" || $choice == "t"){
echo "Här är Te";
}
else{
echo "Välj Kaffe eller TE!";
}
}
?>
</body>
</html>
