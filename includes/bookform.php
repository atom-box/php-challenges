<h3> 
  <?php

  require_once 'includes/login.php';


// Create connection
$db_server = new mysqli($db_hostname, $db_username, $db_password);

// Check connection
if ($db_server->connect_error) {
    die("Connection failed: " . $db_server->connect_error);
}
echo "Connected successfully ! ! ! !";





  $db_server = mysql_connect($db_hostname, $db_username, $db_password);

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