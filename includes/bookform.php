<h3> 

<?php
require_once 'includes/login.php';
$db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($db_server -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db_server -> connect_error;
  exit();
}
echo "Connected successfully ! ! ! !";


// Return name of current default database
if ($result = $db_server -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  echo "Default database is " . $row[0] . "...\n...";
  // the above newline syntax worked butnowdoesnt
  $result -> close(); // CLOSE A RESULT? NOT HANDLE?
}

// redundant.  comment this out.
// $db_server -> select_db('classics');

$query = "SELECT * FROM classics";
;
if (!$result = $db_server -> query($query)) die("Problems arose, especially ..."  );
// TODO NOW DO SOMETHING WITH THE RESULT
///////
echo "hubba0";
while($row = $result->fetch_array(MYSQLI_NUM)){
  printf ("Author %s <br>", $row[0]);
  printf ("Title %s <br>", $row[1]);
  printf ("Category %s <br>", $row[2]);
  printf ("Year %s <br>", $row[3]);
}



/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
echo "hubba1";
printf ("%s (%s)\n", $row[0], $row[1]);
echo "hubba2";
$row = $result->fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

// Free result set
$result -> free_result();

$db_server -> close();









echo ' 
<form action="" method="">
<pre>
  Author <input type="text" name="author" />
  Title <input type="text" name="title" />
  Category <input type="text" name="category" />
  Year <input type="text" name="year" />
  ISBN <input type="text" name="isbn" />

</pre>
</form>
<h3>Meh</h3>
<h1><i>World</i></h1>
<p>& Co</p>
';
?>
</h3>