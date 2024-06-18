<?php
	session_start();
	if(empty($_SESSION)) {
		print "<script>location.href='index.php';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Login</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-ligh bg-light">
			<div class="container-fluid">
				<a class="navbar-brand">
					SistemaX
				</a>
				<?php
				print "Ola," . $_SESSION['nome'];
				print "<a href='logount.php' class= 'btn btn-danger'>Sair</a>";
				?>
			</div>
		</nav>
	</body>
</html>