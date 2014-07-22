
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title_for_layout; ?>&middot;SISHotel</title>
</head>
<body>
	<?php echo $this->fetch('content'); ?>

	<p><?php echo $Contact['nome']. ' ' . $Contact['sobreNome'] ?>,<br />
            &nbsp;&nbsp;&nbsp;Obrigado pelo seu interesse.</p>
</body>
</html>