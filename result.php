<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お問い合わせの入力内容</title>
<style>
#result {
	border: 1px solid #cccccc;
	border-collapse: collapse;
	width: 100%;
	max-width: 800px;
}
th, td {
	padding: 0.5em;
	border: 1px solid #cccccc;
	text-align: left;
	vertical-align: top;
}
th {
	width: 100px;
	background-color: #eeeeee;
}
</style>

</head>
<body>
<h1>お問い合わせフォームの入力内容</h1>
<table id="result">
	<tbody id="test">
	<tr><th>name属性</th><th>入力された内容</th></tr>
	</tbody>
</table>
<p><a href="contact.php">←お問い合わせフォームに戻る</a></p>

<script>
'use strict';

{
	window.addEventListener('DOMContentLoaded', function(){
		var params = decodeURI(location.search);
		params = params.substring(1);
		var paramArray = [];
		paramArray = params.split("&");
		var tableContent = "";
		paramArray.forEach(function(item, index){
			var keyValue = [];
			keyValue = item.split("=");
			var tr = document.createElement("tr");
			var tdName = document.createElement("td");
			tdName.textContent = keyValue[0];
			var tdValue = document.createElement("td");
			tdValue.textContent = keyValue[1];
			tr.appendChild(tdName);
			tr.appendChild(tdValue);
			var e = document.getElementById("test");
			e.appendChild(tr);
		});
	});
}
</script>
</body>
</html>