<h3> 

<?php
require_once 'includes/login.php';
$db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($db_server -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db_server -> connect_error;
  exit();
}
// Return name of current default database
if ($result = $db_server -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
  echo "Default database is " . $row[0] . "...\n...";
  // the above newline syntax works
  $result -> close();
}

// Change db to "test" db
$db_server -> select_db("test");


echo "Connected successfully ! ! ! !";
$db_server -> select_db('classics');

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