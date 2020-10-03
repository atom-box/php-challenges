// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

// Use this namespace
use Steampixel\Route;

// Add your first route
Route::add('/', function() {
  echo 'Welcome :-)';
});

// Run the router
Route::run('/');


<?php 







include 'includes/head.php';
?>

<?php 
include 'includes/five.php';
?>

<?php 
include 'includes/one.php';
?>
<?php 
include 'includes/two.php';
?>

<?php 
include 'includes/three.php';
?>

<?php 
include 'includes/four.php';
?>

<?php
include 'includes/six.php'
?>

<?php
include 'includes/foot.php';
?>