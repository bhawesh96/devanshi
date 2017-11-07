<!DOCTYPE html>
<html>
<head>
	<style>
		.zoom {
			display:inline-block;
			position: relative;
		}
		img	{
			width: 100%;
		}

	</style>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='js/jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#ex3').zoom({ on:'click', magnify:'0.6' });			 
		});
	</script>

</head>
<body>
	<span class='zoom' id='ex3'>
		<?php $img=$_GET['image']; 
		echo "<img src='$img'>";
		?>
	</span>
</body>
</html>
