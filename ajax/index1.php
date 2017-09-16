<html>
<head>
	<script type="text/javascript">

		function load(thediv, file) {
			if(window.XMLHttpRequest){
				xmlh = new XMLHttpRequest();
			} else {
				xmlh = new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlh.open('GET', file, true);
			
			xmlh.onreadystatechange = function() {
				if(xmlh.readyState == 4 && xmlh.status == 200){
					document.getElementById(thediv).innerHTML = xmlh.responseText;
				}
			}
			xmlh.send();				
		}
	</script>
</head>
<body>
<input type="button" value="Try" onclick="load('adiv','include.inc.php');">

<div id="adiv"></div>
</body>
</html>



