<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="" content="">
<meta keywords="" content="">
<meta description="" content="">
<title>Welcome</title>
</head>

	<!--CSS stylesheets-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
<?php

	require_once 'classes/navigation.php';
	require_once 'config/connect.php';
	
	$navi = new navigation();
	$main = $navi->getNav();
	
?>



<body>
<header>
	<nav>
		<ul><?php foreach($main as $nav): ?>
			<li><?php echo $nav['name']; ?></li>
			<?php endforeach;?>
		</ul>
		
	</nav>
</header>


</body>
</html>
