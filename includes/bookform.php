<form action="" method="">
<pre>
  Author <input type="text" name="author" />
  Title <input type="text" name="title" />
  Category <input type="text" name="category" />
  Year <input type="text" name="year" />
  ISBN <input type="text" name="isbn" />
</pre>
</form>

<p> 
<?php


echo ' 
//////
';


require_once 'includes/login.php';
$db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($db_server -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db_server -> connect_error;
  exit();
}
// echo "Connected successfully ! ! ! !";


// Return name of current default database
if ($result = $db_server -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  // echo "Default database is " . $row[0] . "...\n...";
  // the above newline syntax worked butnowdoesnt
  $result -> close(); // CLOSE A RESULT? NOT HANDLE?
}

$query = "SELECT * FROM classics";
;
if (!$result = $db_server -> query($query)) die("Problems arose, especially ..."  );

printf("<br>");
while($row = $result->fetch_array(MYSQLI_NUM)){
  printf("<br /><br />");
  printf ("<strong>Author:</strong> %s <br>", $row[0]);
  printf ("<strong>Title:</strong> %s <br>", $row[1]);
  printf ("<strong>Category:</strong> %s <br>", $row[2]);
  printf ("<strong>Year:</strong> %s <br>", $row[3]);
}



// Free result set
$result -> free_result();

$db_server -> close();

?>
</p>