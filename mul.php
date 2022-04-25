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
$R10="";
$R11="";
$R12="";
$R13="";
$R14="";
$R15="";
$R16="";
$R17="";
$R18="";
$A="";
$AA="";
$AAA="";

$B="";
$BB="";
$BBB="";

$C="";
$CC="";
$CCC="";

$D="";
$DD="";
$DDD="";

$V1="";
$V2="";
$V3="";
$V4="";
$V5="";
$V6="";
$V7="";
$V8="";
$V9="";
$V10="";
$V11="";
$V12="";
$V13="";
$V14="";
$V15="";
$V16="";
$V17="";
$V18="";
$V20="";
$V21="";
$V22="";
$V21="";
$V23="";
$V24="";
$V25="";
$V26="";
$V27="";
$V28="";
$V30="";
$V31="";
$V32="";

$det="";



if((isset($_POST['var1']))&&(isset($_POST['var2']))&&(isset($_POST['var3']))
&&(isset($_POST['var4']))&&(isset($_POST['var5']))&&(isset($_POST['var6']))
&&(isset($_POST['var7']))&&(isset($_POST['var8']))&&(isset($_POST['var9']))&&(isset($_POST['var10']))&&
(isset($_POST['var11']))&&(isset($_POST['var12']))&&(isset($_POST['var13']))
&&(isset($_POST['var14']))&&(isset($_POST['var15']))&&(isset($_POST['var16']))&&(isset($_POST["det"])))
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
	$v19=$_POST['var19'];
	$v20=$_POST['var20'];
	$v21=$_POST['var21'];
	$v22=$_POST['var22'];
	$v23=$_POST['var23'];
	$v24=$_POST['var24'];
	$v25=$_POST['var25'];
	$v26=$_POST['var26'];
	$v27=$_POST['var27'];
	$v28=$_POST['var28'];
	$v29=$_POST['var29'];
	$v30=$_POST['var30'];
	$v31=$_POST['var31'];
	$v32=$_POST['var32'];


$A=($v11*$v16)-($v12*$v15);
$AA=($v10*$v16)-($v12*$v14);
$AAA=($v10*$v15)-($v11*$v14);

$A=($v6*$A);
$AA=$AA*-$v7;
$AAA=$AAA*$v8;
$V1=$A+$AA+$AAA;
$V1=$v1*$V1;

$B= ($v11*$v16)-($v12*$v15);
$BB= ($v9*$v16)-($v12*$v13);
$BBB= ($v9*$v15)-($v11*$v13);

$B=$B*$v5;
$BB=$BB*-$v7;
$BBB=$BBB*$v8;
$V2=$B+$BB+$BBB;
$V2=$v2*$V2;

$C= ($v10*$v16)-($v12*$v14);
$CC= ($v9*$v16)-($v12*$v13);
$CCC= ($v9*$v14)-($v10*$v13);

$A=$C*$v5;
$CC=$CC*-$v6;
$CCC=$CCC*$v8;
$V3=$C+$CC+$CCC;
$V3=$v3*$V3;

$D= ($v10*$v15)-($v11*$v14);
$DD= ($v9*$v15)-($v11*$v13);
$DDD= ($v9*$v14)-($v10*$v13);

$D=$D*$v5;
$DD=$DD*-$v6;
$DDD=$DDD*$v7;
$V4=$D+$DD+$DDD;
$V4=-$v4*$V4;
$det=$V1+$V2+$V3+$V4;

}
else if((isset($_POST['var1']))&&(isset($_POST['var2']))&&(isset($_POST['var3']))
&&(isset($_POST['var4']))&&(isset($_POST['var5']))&&(isset($_POST['var6']))
&&(isset($_POST['var7']))&&(isset($_POST['var8']))&&(isset($_POST['var9']))&&(isset($_POST['var10']))&&
(isset($_POST['var11']))&&(isset($_POST['var12']))&&(isset($_POST['var13']))
&&(isset($_POST['var14']))&&(isset($_POST['var15']))&&(isset($_POST['var16']))&&(isset($_POST['var17']))
&&(isset($_POST['var18']))&&(isset($_POST['var19']))&&(isset($_POST['var20']))
&&(isset($_POST['var21']))&&(isset($_POST['var22']))&&(isset($_POST['var23']))&&(isset($_POST['var24']))
&&(isset($_POST['var16']))&&(isset($_POST['var16']))&&(isset($_POST['var16']))
&&(isset($_POST['var25']))&&(isset($_POST['var26']))&&(isset($_POST['var27']))&&(isset($_POST['var28']))
&&(isset($_POST['var29']))&&(isset($_POST['var30']))&&(isset($_POST['var31']))&&(isset($_POST['var32']))&&(isset($_POST["mul"])))
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
	$v19=$_POST['var19'];
	$v20=$_POST['var20'];
	$v21=$_POST['var21'];
	$v22=$_POST['var22'];
	$v23=$_POST['var23'];
	$v24=$_POST['var24'];
	$v25=$_POST['var25'];
	$v26=$_POST['var26'];
	$v27=$_POST['var27'];
	$v28=$_POST['var28'];
	$v29=$_POST['var29'];
	$v30=$_POST['var30'];
	$v31=$_POST['var31'];
	$v32=$_POST['var32'];
$R1=($v1*$v17)+($v2*$v21)+($v3*$v25)+($v4*$v29);
$R2=($v1*$v18)+($v2*$v22)+($v3*$v26)+($v4*$v30);
$R3=($v1*$v19)+($v2*$v23)+($v3*$v27)+($v4*$v31);
$R4=($v1*$v20)+($v2*$v24)+($v3*$v28)+($v4*$v32);

$R5=($v5*$v17)+($v6*$v21)+($v7*$v25)+($v8*$v29);
$R6=($v5*$v18)+($v6*$v22)+($v7*$v26)+($v8*$v30);
$R7=($v5*$v19)+($v6*$v23)+($v7*$v27)+($v8*$v31);
$R8=($v5*$v20)+($v6*$v24)+($v7*$v28)+($v8*$v32);

$R9=($v9*$v17)+($v10*$v21)+($v11*$v25)+($v12*$v29);
$R10=($v9*$v18)+($v10*$v22)+($v11*$v26)+($v12*$v30);
$R11=($v9*$v19)+($v10*$v23)+($v11*$v27)+($v12*$v31);
$R12=($v9*$v20)+($v10*$v24)+($v11*$v28)+($v12*$v32);

}
else if((isset($_POST['var1']))&&(isset($_POST['var2']))&&(isset($_POST['var3']))
&&(isset($_POST['var4']))&&(isset($_POST['var5']))&&(isset($_POST['var6']))
&&(isset($_POST['var7']))&&(isset($_POST['var8']))&&(isset($_POST['var9']))&&(isset($_POST['var10']))&&
(isset($_POST['var11']))&&(isset($_POST['var12']))&&(isset($_POST['var13']))
&&(isset($_POST['var14']))&&(isset($_POST['var15']))&&(isset($_POST['var16']))&&(isset($_POST['var17']))
&&(isset($_POST['var18']))&&(isset($_POST['var19']))&&(isset($_POST['var20']))
&&(isset($_POST['var21']))&&(isset($_POST['var22']))&&(isset($_POST['var23']))&&(isset($_POST['var24']))
&&(isset($_POST['var16']))&&(isset($_POST['var16']))&&(isset($_POST['var16']))
&&(isset($_POST['var25']))&&(isset($_POST['var26']))&&(isset($_POST['var27']))&&(isset($_POST['var28']))
&&(isset($_POST['var29']))&&(isset($_POST['var30']))&&(isset($_POST['var31']))&&(isset($_POST['var32']))&&(isset($_POST["add"])))
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
	$v19=$_POST['var19'];
	$v20=$_POST['var20'];
	$v21=$_POST['var21'];
	$v22=$_POST['var22'];
	$v23=$_POST['var23'];
	$v24=$_POST['var24'];
	$v25=$_POST['var25'];
	$v26=$_POST['var26'];
	$v27=$_POST['var27'];
	$v28=$_POST['var28'];
	$v29=$_POST['var29'];
	$v30=$_POST['var30'];
	$v31=$_POST['var31'];
	$v32=$_POST['var32'];

$R1=($v1+$v17);
$R2=($v2+$v18);
$R3=($v3+$v19);
$R4=($v4+$v20);
$R5=($v5+$v21);
$R6=($v6+$v22);
$R7=($v7+$v23);
$R8=($v8+$v24);
$R9=($v9+$v25);
$R10=($v10+$v26);
$R11=($v11+$v27);
$R12=($v12+$v28);
$R13=($v13+$v29);
$R14=($v14+$v30);
$R15=($v15+$v31);
$R16=($v16+$v32);

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
<input type="text" name="var1">
<input type="text" name="var2" >
<input type="text" name="var3" >
<input type="text" name="var4" ><br>
<input type="text" name="var5" >
<input type="text" name="var6" >
<input type="text" name="var7" >
<input type="text" name="var8" ><br>
<input type="text" name="var9" >
<input type="text" name="var10" >
<input type="text" name="var11">
<input type="text" name="var12" ><br>
<input type="text" name="var13" >
<input type="text" name="var14" >
<input type="text" name="var15" >
<input type="text" name="var16" ><br><br><br>

<input type="text" name="var17" >
<input type="text" name="var18" >
<input type="text" name="var19" >
<input type="text" name="var20" ><br>
<input type="text" name="var21" >
<input type="text" name="var22" >
<input type="text" name="var23" >
<input type="text" name="var24" ><br>
<input type="text" name="var25" >
<input type="text" name="var26" >
<input type="text" name="var27" >
<input type="text" name="var28" ><br>
<input type="text" name="var29" >
<input type="text" name="var30">
<input type="text" name="var31">
<input type="text" name="var32"><br><br>

<button type="" name="mul">Multiplication</button>
<button type="" name="add">Addition</button>
<button type="" name="det">Déterminant</button><br><br>
</form>
</div>

<div align="center"><table border="2px" bgcolor="#ffff">
<tr>
	<td><?php echo $R1;?></td>
	<td><?php echo $R2;?></td>
	<td><?php echo $R3;?></td>
	<td><?php echo $R4;?></td>
</tr>
<tr>
	<td><?php echo $R5;?></td>
	<td><?php echo $R6;?></td>
	<td><?php echo $R7;?></td>
	<td><?php echo $R8;?></td>
</tr>
<tr>
	<td><?php echo $R9;?></td>
	<td><?php echo $R10;?></td>
	<td><?php echo $R11;?></td>
	<td><?php echo $R12;?></td>
</tr>

</table>
</div><br>
<p> Le determinant de cette matrice est : <?php echo $det;?> </p>

</body>
</html>