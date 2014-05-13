
<?php require 'config/connect.php';

//starts session
session_start();
$_SESSION['user_id'] = 1;
$_SESSION['user_tz'] ="Canada/Toronto";

//for logging out
$_SESSION = array();

//check for a new language ID
//store language ID in session:
if(isset($_GET['lid']) && filter_var($_GET['lid'],
	Filter_VALIDATE_INT, array('min_range' => 1))
	){
	$_SESSION['lid'] = $_GET['lid'];
} elseif (!isset($_SESSION['lid'])){
	$_SESSION['lid'] = 1; //default language
}

// Get the words for this language:
$q = "SELECT * FROM words WHERE lang_id = {$_SESSION['lid']}";
$r = mysqli_query($dbc, $q);
if (mysqli_num_rows($r) == 0) { // Invalid language ID!
	
	// Use the default language:
	$_SESSION['lid'] = 1; // Default.
	$q = "SELECT * FROM words WHERE lang_id = {$_SESSION['lid']}";
	$r = mysqli_query($dbc, $q);
	
}

// Fetch the results into a variable:
$words = mysqli_fetch_array($r, MYSQLI_ASSOC);

// Free the results:
mysqli_free_result($r);
?>
