<?php
	
	function page_switch($page){
		switch($page) {
			default: include('pages/home.php');
			break;
			case 'home': include('pages/home.php');
		}
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>A Guide to the Worlds Most Powerful CMS | NebulaCMS Atlas</title>
		<link type="text/css" rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div id="header">
			<h1>NebulaCMS Atlas</h1>
			<h6>The Official NebulaCMS Guide.</h6>
		</div>
		<nav>
			<ul>
				<li><a href="?id=main">Main</a></li>
			</ul>
		</nav>
		<div id="content">
			<?php page_switch($_GET['id']); ?>
		</div>
		<div id="footer">
		
		</div>
	</body>
</html>