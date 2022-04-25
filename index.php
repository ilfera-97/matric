<?php
$R1="";
$R2="";
$R3="";
$R4="";
$R5="";
$R6="";
$R7="";
$R8="";
$R9="";

if((isset($_POST['var1']))&&(isset($_POST['var2']))&&(isset($_POST['var3']))
&&(isset($_POST['var4']))&&(isset($_POST['var5']))&&(isset($_POST['var6']))
&&(isset($_POST['var7']))&&(isset($_POST['var8']))&&(isset($_POST['var9']))&&(isset($_POST['var10']))&&
(isset($_POST['var11']))&&(isset($_POST['var12']))&&(isset($_POST['var13']))
&&(isset($_POST['var14']))&&(isset($_POST['var15']))&&(isset($_POST['var16']))&&(isset($_POST['var17']))
&&(isset($_POST['var18'])) &&(isset($_POST["mul"])))
{
	$v1=$_POST['var1'];
	$v2=$_POST['var2'];
	$v3=$_POST['var3'];
	$v4=$_POST['var4'];
	$v5=$_POST['var5'];
	$v6=$_POST['var6'];
	$v7=$_POST['var7'];
	$v8=$_POST['var8'];
	$v9=$_POST['var9'];
	$v10=$_POST['var10'];
	$v11=$_POST['var11'];
	$v12=$_POST['var12'];
	$v13=$_POST['var13'];
	$v14=$_POST['var14'];
	$v15=$_POST['var15'];
	$v16=$_POST['var16'];
	$v17=$_POST['var17'];
	$v18=$_POST['var18'];

	$R1=(($v1*$v10)+($v2*$v13)+($v3*$v16));
	$R2=(($v1*$v11)+($v2*$v14)+($v3*$v17));
	$R3=(($v1*$v12)+($v2*$v15)+($v3*$v18));

	$R4=(($v4*$v10)+($v5*$v13)+($v6*$v16));
	$R5=(($v4*$v11)+($v5*$v14)+($v6*$v17));
	$R6=(($v4*$v12)+($v5*$v15)+($v6*$v18));

	$R7=(($v7*$v10)+($v8*$v13)+($v9*$v16));
	$R8=(($v7*$v11)+($v8*$v14)+($v9*$v17));
	$R9=(($v7*$v12)+($v8*$v15)+($v9*$v18));
}

else if((isset($_POST['var1']))&&(isset($_POST['var2']))&&(isset($_POST['var3']))
&&(isset($_POST['var4']))&&(isset($_POST['var5']))&&(isset($_POST['var6']))&&(isset($_POST['var10']))&&
(isset($_POST['var11']))&&(isset($_POST['var12']))&&(isset($_POST['var13']))
&&(isset($_POST['var14']))&&(isset($_POST['var15']))&&(isset($_POST['var16']))&&(isset($_POST['var17']))
&&(isset($_POST['var18'])) &&(isset($_POST["mul"])))
{
	$v1=$_POST['var1'];
	$v2=$_POST['var2'];
	$v3=$_POST['var3'];
	$v4=$_POST['var4'];
	$v5=$_POST['var5'];
	$v6=$_POST['var6'];
	$v7=$_POST['var7'];
	$v8=$_POST['var8'];
	$v9=$_POST['var9'];
	$v10=$_POST['var10'];
	$v11=$_POST['var11'];
	$v12=$_POST['var12'];
	$v13=$_POST['var13'];
	$v14=$_POST['var14'];
	$v15=$_POST['var15'];
	$v16=$_POST['var16'];
	$v17=$_POST['var17'];
	$v18=$_POST['var18'];

	$R1=(($v1*$v10)+($v2*$v13)+($v3*$v16));
	$R2=(($v1*$v11)+($v2*$v14)+($v3*$v17));
	$R3=(($v1*$v12)+($v2*$v15)+($v3*$v18));

	$R4=(($v4*$v10)+($v5*$v13)+($v6*$v16));
	$R5=(($v4*$v11)+($v5*$v14)+($v6*$v17));
	$R6=(($v4*$v12)+($v5*$v15)+($v6*$v18));

}

else if((isset($_POST['var1']))&&(isset($_POST['var2']))&&(isset($_POST['var3']))
&&(isset($_POST['var4']))&&(isset($_POST['var5']))&&(isset($_POST['var6']))
&&(isset($_POST['var7']))&&(isset($_POST['var8']))&&(isset($_POST['var9']))&&(isset($_POST['var10']))&&
(isset($_POST['var11']))&&(isset($_POST['var12']))&&(isset($_POST['var13']))
&&(isset($_POST['var14']))&&(isset($_POST['var15']))&&(isset($_POST['var16']))&&(isset($_POST['var17']))
&&(isset($_POST['var18'])) &&(isset($_POST["add"])))
{
	$v1=$_POST['var1'];
	$v2=$_POST['var2'];
	$v3=$_POST['var3'];
	$v4=$_POST['var4'];
	$v5=$_POST['var5'];
	$v6=$_POST['var6'];
	$v7=$_POST['var7'];
	$v8=$_POST['var8'];
	$v9=$_POST['var9'];
	$v10=$_POST['var10'];
	$v11=$_POST['var11'];
	$v12=$_POST['var12'];
	$v13=$_POST['var13'];
	$v14=$_POST['var14'];
	$v15=$_POST['var15'];
	$v16=$_POST['var16'];
	$v17=$_POST['var17'];
	$v18=$_POST['var18'];

	$R1=($v1+$v10);
	$R2=($v2+$v11);
	$R3=($v3+$v12);

	$R4=($v4+$v13);
	$R5=($v5+$v14);
	$R6=($v6+$v15);

	$R7=($v7+$v16);
	$R8=($v8+$v17);
	$R9=($v9+$v18);
}

else
echo "veuillez renseigner vos matrices";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input
		{
			width: 50px;
		}
body
{
	background:#2fb21ca2; 
}


	</style>
</head>
<body>
	<div align="center"><form method="post" action="">
<input type="text" name="var1" requiered="v1">
<input type="text" name="var2" requiered="v2">
<input type="text" name="var3" requiered="v3"><br>
<input type="text" name="var4" requiered="v4">
<input type="text" name="var5" requiered="v5">
<input type="text" name="var6" requiered="v6"><br>
<input type="text" name="var7" requiered="v7">
<input type="text" name="var8" requiered="v8">
<input type="text" name="var9" requiered="v9"><br><br>

<input type="text" name="var10" requiered="v10">
<input type="text" name="var11" requiered="v11">
<input type="text" name="var12" requiered="v12"><br>
<input type="text" name="var13" requiered="v13">
<input type="text" name="var14" requiered="v14">
<input type="text" name="var15" requiered="v15"><br>
<input type="text" name="var16" requiered="v16">
<input type="text" name="var17" requiered="v17">
<input type="text" name="var18" requiered="v18"><br><br>

<button type="" name="mul">Multiplication</button>
<button type="" name="add">Addition</button>	<br><br>
</form>
</div>

<div align="center"><table border="2px" bgcolor="#ffff">
<tr>
	<td><?php echo $R1;?></td>
	<td><?php echo $R2;?></td>
	<td><?php echo $R3;?></td>
</tr>
<tr>
	<td><?php echo $R4;?></td>
	<td><?php echo $R5;?></td>
	<td><?php echo $R6;?></td>
</tr>
<tr>
	<td><?php echo $R7;?></td>
	<td><?php echo $R8;?></td>
	<td><?php echo $R9;?></td>
</tr>
</table>
</div><br>
<p><a href="mul.php"> Calculer le determinant d'une matrice 4x4</a></p>

</body>
</html>