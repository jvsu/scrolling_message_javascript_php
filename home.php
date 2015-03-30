<html>
<head>
	<title>Home</title>
	<style type="text/css">
	input, textarea{
		display:block;
	}

	</style>
</head>
<body>
	<h1>Enter Picture and Phrases</h1>
	<form action='process.php' method='post'>
		<input type='hidden' name='action' value='data'>
		<input type='text' name='picture' placeholder='Enter Image URL'>
		<textarea name='words' placeholder='Enter Words Seperated by Commas'></textarea>
		<input type='submit' value='submit'>
	</form>
</body>
</html>