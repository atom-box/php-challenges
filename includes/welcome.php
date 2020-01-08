<html>
<body>

<!-- Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
 -->
<?php
if (isset($_POST["first"])){
  echo "Lookin at some " . $_POST["first"];
} else {
  echo "Uffda.";
}



?>

</body>
</html> 