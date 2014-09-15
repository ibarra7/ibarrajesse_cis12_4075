<?php
/*
	jesse ibarra
	sept 15th
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>For loop Table</title>
</head>

<body>
<h!>trig table</h>
<?php
	//input the data from the form
	$anglestrt=$_Get['angstrt'];
	
?>
<table width="200" border="1">
  <tbody>
    <tr>
	  <th>Degree</th>
      <th>Radians</th>
      <th>Sine</th>
	  <th>Cosine</th>
      <th>Tangent</th>
    </tr>
<?php
	//For - Loop
	echo "<tr>";
	for($angle=0;$anle<=180;$angle+=5) {
		echo "<td>";
		echo "$angle";
		//Calculate
		$rad=$angele*atan(1)/45;
		$sine=sin($rad);
		$cosine=cos($rad);
		$tangent=tan($rad);
		echo "<td>
?>
</table>

</body>
</html>