<?php
	
	if(isset($_GET['id_stagiaire']))
		$ids=$_GET['id_stagiaire'];
	else
		$ids=0;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>  Les Documents et les Attestations </title> 
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>				
	<body>
		<br><br><br>
		<div class="container col-md-6 col-md-offset-3">
			<h2>document à imprimer</h2>
			<div class="panel panel-primary">
				<div class="panel-body text-center">
					
			
					
					<a class="btn btn-success" href="att_scolarite.php?ids=<?php echo $ids ?>">
						Attestation de scolarité
					</a>
					
					
				
				</div>
			</div>			
		</div>
	</body>	
</html>
