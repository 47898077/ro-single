<?PHP
include('config.php');
require "inc/user_header.inc";
	$RePD = 0;
	if (md5($_POST['md5lock']) != $_POST['md5lockx']) {
		$TempString1="<BR><font color='#FF0000'>��֤�����</font>";
		$TempString2="<BR><BR><a href='user_regist.php'>����һҳ</a>";
		$RegPD = 1;
	}
	if (empty($_POST['id'])) {
		$TempString1="<font color='#ff0000'>δ�����ʺ�</font>";
		$TempString2="<a href=user_recall.php>����һҳ</a>";
		$RegPD = 1;
	}
	if (empty($_POST['passwd']) and $RegPD != 1) {
		$TempString1="<font color='#ff0000'>δ��������</font>";
		$TempString2="<a href=user_recall.php>����һҳ</a>";
		$RegPD = 1;
	}
	if (empty($_POST['id']) or empty($_POST['passwd']) and $RegPD != 1){
		$TempString1="<font color='#ff0000'>���� #013</font>";
		$TempString2="<a href=user_recall.php>����һҳ</a>";
		$RegPD = 1;
	}
if ($RegPD != 1) {
	$query = "SELECT account_id,password FROM login WHERE username='".$_POST['id']."'";
	$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
	$data = mysql_fetch_row($result);
	$account_id=$data[0];
	$password=$data[1];
	if($_POST['passwd']!=$password){
		$TempString1="<font color='#ff0000'>�ʺŻ��������!</font>";
		$TempString2="<a href=user_recall.php>����һҳ</a>";
	}else{
	echo "
	<TABLE cellSpacing=0 cellPadding=0 width=500 align=center border=0>
		<TR>
			<TD width=400 rowspan='3' vAlign=top>
				<center>
				<form name=form1 method=post action=user_recall_msg.php>
				<table width=400 align='center'>
				<tr>
				<td width='100%'><div align='center'>��ѡ�����<br></td>
				</tr>
				<tr>
				<td width='242'><div align='center'><br><select name=select >";
				$query = "SELECT `name` FROM `char` WHERE account_id=".$account_id.";";
				$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
				$row = mysql_num_rows($result);
				for($i=0;$i<$row;$i++){
				$data = mysql_fetch_row($result);
				echo "\t<option value=".$data[0].">".$data[0]."</option>\n";
				}
				echo "
				</select></div></td></tr><tr><td><br>
				<div align='center'><input type='checkbox' class='box' name='recall'>&nbsp;&nbsp;�����ﴫ�ش����</div><br><br>	
				<div align='center'><input type='checkbox' class='box' name='divest'>&nbsp;&nbsp;ж�����ϵ�����װ��</div></td></tr>
				</table><br><div align='center'><input type=submit class='box' name=Submit value=&nbsp;ȷ&nbsp;��&nbsp;></div></form>
				</center>
			</TD>
		</TR>
	</TABLE>";
	require "inc/user_footer.inc";
	exit;
	}
}
echo "
<TABLE cellSpacing=0 cellPadding=0 width=500 align=center border=0>
	<TR>
		<TD width=400 rowspan='3' vAlign=top>
			<!--���̲���-->
			<center>
				<TABLE cellSpacing=0 cellPadding=0 width=400 align=center border=0>
				<TR valign=middle align='center'>
				<TD height=30>&nbsp;</TD>
				</TR>
				<TR>
				<TD height=60><center>".$TempString1."".$TempString2."</center></TD>
				</TR>
				<TR>
				<TD height=30>&nbsp;</TD>
				</TR>
				</TABLE>
			</center>
			<!--���̲���-->
		</TD>
	</TR>
</TABLE>";
require "inc/user_footer.inc";
?>
