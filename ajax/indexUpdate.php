<html>
<head>
<script type="text/javascript">
	function insert() {
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange  = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('message').innerHTML = xmlhttp.responseText;
			}

		}

		parameters = 'insert_text='+document.getElementById('insert_text').value;

		xmlhttp.open('POST', 'update.inc.php', true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xmlhttp.send(parameters);


		/* text = document.getElementById("insert_text").value;
		alert(text); */
	}
</script>
</head>
<body>
	
	Insert: <input type="text" id="insert_text"> <input type="button" value="Submit" onclick="insert();">
<div id='message'></div>
</body>
</html>