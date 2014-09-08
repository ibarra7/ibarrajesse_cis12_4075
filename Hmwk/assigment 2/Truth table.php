<?php
/*
	Jesse Ibarra
	September 03, 2014
	Purpose: Deuplicate truth Table
*/
?>
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	echo "<h1>truth table"
	
	?>
    <table width="200" border="1">
  <tbody>
    <tr>
      <th>X</th>
      <th>Y</th>
      <th>!X</th>
      <th>!Y</th>
      <th>X&&Y</th>
      <th>!X||Y</th>
        <th>X^Y</th>
      <th>X^Y^Y</th>
        <th>X^Y^X</th>
      <th>(X&&Y)</th>
      <th>!X||!Y</th>
      <th>!(X||Y)</th>
      <th>!X&&!Y</th>
    </tr>
    <tr>
    <?php
		 $x=true;    
		 $y=true; 
          echo "<td>" . ($x?"T":"F")."</td>"; 
          echo "<td>" . ($y?"T":"F")."</td>"; 
          echo "<td>" . (!$x?"T":"F")."</td>"; 
          echo "<td>" . (!$y?"T":"F")."</td>"; 
          echo "<td>" . ($x&&$y?"T":"F")."</td>"; 
          echo "<td>" . ($x||$y?"T":"F")."</td>"; 
          echo "<td>" . ($x^$y||$y?"T":"F")."</td>"; 
          echo "<td>" . ($x^$y^$y?"T":"F")."</td>";          echo "<td>" . ($x^$y^$x?"T":"F")."</td>"; 
          echo "<td>" . (!($x&&$y)?"T":"F")."</td>"; 
          echo "<td>" . (!$x||!$y?"T":"F")."</td>";          echo "<td>" . (!($x||$y)?"T":"F")."</td>"; 
          echo "<td>" . (!$x&&!$y?"T":"F")."</td>"; 
        
	?>
          </tr>
          <tr>
    <?php
		 $y= false        
		 echo "<td>" . ($x?"T":"F")."</td>"; 
         echo "<td>" . ($y?"T":"F")."</td>"; 
         echo "<td>" . (!$x?"T":"F")."</td>"; 
         echo "<td>" . (!$y?"T":"F")."</td>"; 
         echo "<td>" . ($x&&$y?"T":"F")."</td>"; 
         echo "<td>" . ($x||$y?"T":"F")."</td>"; 
         echo "<td>" . ($x^$y||$y?"T":"F")."</td>"; 
         echo "<td>" . ($x^$y^$y?"T":"F")."</td>"; 
         echo "<td>" . ($x^$y^$x?"T":"F")."</td>"; 
         echo "<td>" . (!($x&&$y)?"T":"F")."</td>"; 
         echo "<td>" . (!$x||!$y?"T":"F")."</td>"; 
         echo "<td>" . (!($x||$y)?"T":"F")."</td>"; 
         echo "<td>" . (!$x&&!$y?"T":"F")."</td>"; 
    ?> 
    	 
        </tr> 
         <tr> 
    <?php 
	         $x=false; 
             $y=true; 
            echo "<td>" . ($x?"T":"F")."</td>"; 
            echo "<td>" . ($y?"T":"F")."</td>"; 
            echo "<td>" . (!$x?"T":"F")."</td>"; 
            echo "<td>" . (!$y?"T":"F")."</td>"; 
            echo "<td>" . ($x&&$y?"T":"F")."</td>"; 
            echo "<td>" . ($x||$y?"T":"F")."</td>"; 
            echo "<td>" . ($x^$y||$y?"T":"F")."</td>"; 
            echo "<td>" . ($x^$y^$y?"T":"F")."</td>"; 
            echo "<td>" . ($x^$y^$x?"T":"F")."</td>"; 
            echo "<td>" . (!($x&&$y)?"T":"F")."</td>"; 
            echo "<td>" . (!$x||!$y?"T":"F")."</td>"; 
            echo "<td>" . (!($x||$y)?"T":"F")."</td>"; 
            echo "<td>" . (!$x&&!$y?"T":"F")."</td>"; 
    ?> 
    	      </tr> 
99             <tr> 
100     <?php 
            $x=false; 
            $y=false; 
             echo "<td>" . ($x?"T":"F")."</td>"; 
            echo "<td>" . ($y?"T":"F")."</td>"; 
            echo "<td>" . (!$x?"T":"F")."</td>"; 
           echo "<td>" . (!$y?"T":"F")."</td>"; 
           echo "<td>" . ($x&&$y?"T":"F")."</td>"; 
            echo "<td>" . ($x||$y?"T":"F")."</td>"; 
            echo "<td>" . ($x^$y||$y?"T":"F")."</td>"; 
             echo "<td>" . ($x^$y^$y?"T":"F")."</td>"; 
             echo "<td>" . ($x^$y^$x?"T":"F")."</td>"; 
             echo "<td>" . (!($x&&$y)?"T":"F")."</td>"; 
            echo "<td>" . (!$x||!$y?"T":"F")."</td>"; 
             echo "<td>" . (!($x||$y)?"T":"F")."</td>"; 
             echo "<td>" . (!$x&&!$y?"T":"F")."</td>"; 
             
    ?> 
         </tr> 
 </Table> 
 </body> 
 </html> 




		  
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

</body>
</html>