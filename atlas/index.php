<?php
	
	function page_switch($page){
		switch($page) {
			default: include('pages/main.php');
			break;
			case 'main': include('pages/main.php');
			break;
			case 'test': include('pages/test.php');
		}
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<div id="header">
			<h1>Welcome to the NebulaCMS Atlas</h1>
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