<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<div id="container">
	<h1><?php echo $title ?></h1>

	<div id="body">
		<?php
		if($array==NULL)
		{
			echo 'No data yet!';
		}
		else
		foreach($array as $object)
		{
			echo 'Topic : '.$object->topic.' +'.$object->pmarks.' -'.$object->nmarks.'<br>';
		}
		
		?>
	</div>
</div>
</body>
</html>