
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OFFLINE</title>
</head>
<style>
*{
	 margin: 0;
    padding: 0;
    outline: 0;
	}

#container{
	margin:50vh auto 0;
	text-align:center;
	line-height:1.5cm;
	transform:translateY(-50%);
}
</style>
<body>
<div id="container">
	<h1>YOU ARE OFFLINE!</h1>
	<h4>PLEASE CONNECT TO INTERNET!</h4>
	<img src="crying-cute.gif" style="width:300px; height:200px; border-radius:10px;" />
</div>
</body>
<script src="cordova.js"></script>
	<script type="text/javascript">
		function onOnline(){
			window.location='index.html';
		}
		document.addEventListener('online',function(){
			onOnline();
		})
	</script>
</html>
