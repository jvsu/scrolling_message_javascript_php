<?php 
	session_start();
	$pic = $_SESSION['picture'];
	$array = $_SESSION['words'];
 ?>
<html>
<head>
	<title>Message Scroll</title>
	<style type="text/css">
		body{
			background-color:black;
			font-family:monospace;
			color:white;
			font-size:50px;
			text-align:center;
			margin-top:10%;
		}
		#magic{
			color:#777;
			border-right:1px solid #777;
			padding-right:7px;
			display:inline;
		}
		img	{
			display:block;
			width:500px;
			height:500px;
			margin-left: auto;
   			margin-right: auto;
		}
	</style>
</head>
<body>
	<form action='process.php' method='post'>
		<input type='hidden' name='action' value='logoff'>
		<input type='submit' value='Home'> 
	</form>

	<?php 
		$word = $_SESSION['words'];
		if(isset($_SESSION['picture']))
		{
			echo "<img src={$_SESSION['picture']} >";
		}
	?>
	<div id='magic'></div>
	<script type="text/javascript">
	var picture = "<?php echo $pic; ?>";
	var array = <?php echo json_encode($array); ?>;
	(function(list)
	{
		// just declaring a bunch of variables. 
		var words = list,
			el = document.getElementById('magic'),
			word_counter = 0,
			character_counter=0;

		function updateText()
		{
			if(character_counter==words[word_counter].length)
			{
				word_counter++;
				character_counter =0;
				el.innerHTML = '';
			}
			if(word_counter == words.length)
			{
				word_counter=0;
			}
			if(words[word_counter][character_counter]==' ')
			{
				el.innerHTML = el.innerHTML+'&nbsp';
				character_counter +=1;
			}
			else
			{
				el.innerHTML = el.innerHTML+words[word_counter][character_counter];
				character_counter+=1;
			}
		}
		setInterval(updateText,300);

	})(array);
	</script>
	
</body>
</html>