<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="POST">
<input type="text" name="data">
</form>
<a onclick="submit(1)" href="#">page1</a> | 
<a onclick="submit(2)" href="#">page2</a>
<script>
function submit(page){
	document.form1.action = page+'.php';
	document.form1.submit();
}
</script>
</body>
</html>