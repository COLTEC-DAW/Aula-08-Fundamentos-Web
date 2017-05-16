<!DOCTYPE html>
<html>
<head>
	<title>Meu Site misterioso</title>
	<meta charset="utf-8"/>
</head>
<body>

<p>Essa página possui um mistério...</p>

<?php if ($_GET['id']) { ?>
	
	<p>Enviado via GET: <?php echo $_GET['id']; ?></p>

<?php } ?>


<?php if ($_POST['id']) { ?>
	
	<p>Enviado via POST: <?php echo $_POST['id']; ?></p>

<?php } ?>

</body>
</html>

