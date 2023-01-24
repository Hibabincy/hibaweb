<html>
<center>
<body bgcolor="orange">
<h1><u>INDIAN CRICKET TEAM</u></h1>
<h4>Players Name:Virat Kholi,David Warner,AB De Villiers,Andre Russell,M.S,Ben Stokes, Kane Williamson,Jonny Bairstow</h4>
<?php
$name=["Virat Kholi"," David Warner" ,"AB De Villiers", "Andre Russell", "M.S", "Ben Stokes", "Kane Williamson","Jonny Bairstow"];
$role=["right hand batter","left hand batter","finisher","seam allrounder","wk","batter","captain","wk"];
echo "Player Program";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th><th>role</th>";
for ($i=0;$i<8;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";

}
echo "</table>"
?>
</center>
</body>
</html>
