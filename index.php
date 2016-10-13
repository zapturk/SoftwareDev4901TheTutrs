<!DOCTYPE html>
<!--A Javascript module to invoke an ajax call to populate the html web page with the prime numbers between 2 and 1000.
-->
<!--Program designed by Ndede, George M. -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript">
		function Getprimenumbers(){
				if(xmlHttp=GetXmlHttpObject(),null==xmlHttp)return void alert("Your browser does not support AJAX!");
	var a="primeNumbers.php";
	xmlHttp.onreadystatechange=generateNumbers,xmlHttp.open("GET",a,!0),xmlHttp.send(null)
	}function generateNumbers(){4==xmlHttp.readyState&&(document.getElementById("showresult").innerHTML=xmlHttp.responseText)}
	function GetXmlHttpObject(){
		return window.XMLHttpRequest?new XMLHttpRequest:window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):null}
  </script>
  </head>
<body>
  <div id="showresult"></div>
<button type="button" class="btn btn-success" onclick="return Getprimenumbers();">Generate Prime Numbers between [2 - 1000]</button>
	</body>
</html>