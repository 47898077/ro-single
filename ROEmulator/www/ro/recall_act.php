<?PHP
include('config.php');
	$RePD = 0;
	if (empty($_POST['id'])) {
		$TempString1="<font color='#ff0000'>δ�����ʺ�</font>";
		$TempString2="<a href=recall.php>����һҳ</a>";
		$RegPD = 1;
	}
	if (empty($_POST['passwd']) and $RegPD != 1) {
		$TempString1="<font color='#ff0000'>δ��������</font>";
		$TempString2="<a href=recall.php>����һҳ</a>";
		$RegPD = 1;
	}
	if (empty($_POST['id']) or empty($_POST['passwd']) and $RegPD != 1){
		$TempString1="<font color='#ff0000'>���� #013</font>";
		$TempString2="<a href=recall.php>����һҳ</a>";
		$RegPD = 1;
	}
echo "
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<HTML><HEAD><TITLE>".$config_title." - ���Ŵ���</TITLE>";
require "header.inc";
echo "
<TABLE style='POSITION: relative' cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
<TBODY>
<TR>
<TD width=144 background=images/left_bg.jpg></TD>
<TD bgColor=#c5c5c5>
	<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
	<TBODY>
	<TR>
	<TD>
		<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
		<TBODY>
		<TR>
		<TD width=13><IMG height=12 src='images/table01_01.gif' width=13></TD>
		<TD width='100%' background=images/table01_bg1.gif height=12></TD>
		<TD width=13><IMG height=12 src='images/table01_02.gif' width=13></TD>
		</TR>
		</TBODY>
		</TABLE>
	</TD>
	</TR>
	<TR>
	<TD>
		<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
		<TBODY>
		<TR>
		<TD width=13 background=images/table01_bg2.gif>&nbsp;</TD>
		<TD bgColor=#ffefef>
			<TABLE cellSpacing=0 cellPadding=0 width=694 border=0>
			<TBODY>
			<TR>
			<TD height=94>
				<TABLE cellSpacing=0 cellPadding=0 width=694 border=0>
				<TBODY>
				<TR>
				<TD width=42><IMG height=94 src='images/table03_01.gif' width=42></TD>
				<TD vAlign=top background=images/table03_bg1.gif>
					<TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>
					<TBODY>
					<TR>
					<TD width='76%'>
						<TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>
						<TBODY>
						<TR>
						<TD height=55>
							<TABLE cellSpacing=0 cellPadding=0 width='84%' align=right border=0>
							<TBODY>
							<TR>
							<TD width=17><IMG height=13 src='images/heart.gif' width=17></TD>
							<TD class=txt><DIV align=center>".$config_game_Vname."</DIV></TD>
							<TD width=17><IMG height=13 src='images/heart.gif' width=17></TD>
							</TR>
							</TBODY>
							</TABLE>
						</TD>
						</TR>
						<TR>
						<TD height=39><IMG height=27 src='images/wz1_recall.gif' width=209></TD>
						</TR>
						</TBODY>
						</TABLE>
					</TD>
					<TD vAlign=top width='22%'><IMG height=52 src='images/heart2.gif' width=64></TD>
					</TR>
					</TBODY>
					</TABLE>
				</TD>
				<TD width=43><IMG height=94 src='images/table03_02.gif' width=43></TD>
				</TR>
				</TBODY>
				</TABLE>
			</TD>
			</TR>	
			<TR>
			<TD height=181>
				<TABLE cellSpacing=0 cellPadding=0 width='100%' border=0>
				<TBODY>
				<TR>
				<TD>
					<TABLE cellSpacing=0 cellPadding=0 width=678 align=center border=0>
					<TBODY>
					<TR>
					<TD width=2><IMG height=2 src='images/table04_01.gif' width=2></TD>
					<TD background=images/table04_bg1.gif height=2></TD>
					<TD width=2><IMG height=2 src='images/table04_02.gif' width=2></TD>
					</TR>
					<TR>
					<TD width=2 background=images/table04_bg2.gif></TD>
					<TD bgColor=#ffffff>
<!-- ���̲���_��ʼ -->";
if ($RegPD != 1) {
	$query = "SELECT account_id,user_pass FROM login WHERE userid='".$_POST['id']."'";
	$result = mysql_query($query) or die("ִ��ָ��ʧ��!");
	$data = mysql_fetch_row($result);
	$account_id=$data[0];
	$user_pass=$data[1];
	if($_POST['passwd']!=$user_pass){
		$TempString1="<font color='#ff0000'>�ʺŻ��������!</font>";
		$TempString2="<a href=recall.php>����һҳ</a>";
		$RegPD=1;
	}else{
				echo "
				<center>
				<form name=form1 method=post action=recall_act2.php>
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
				</center>";
	}
}
if ($RegPD = 1) {
				echo "
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
				</center>";
}
echo "
<!-- ���̲���_���� -->
					</TD>
					<TD width=2 background=images/table04_bg3.gif></TD>
					</TR>
					</TBODY>
					</TABLE>
				</TD>
				</TR>
				<TR>
				<TD>
					<TABLE cellSpacing=0 cellPadding=0 width=678 align=center border=0>
					<TBODY>
					<TR>
					<TD width=2><IMG height=3 src='images/table04_03.gif' width=2></TD>
					<TD width='100%' background=images/table04_bg4.gif height=3></TD>
					<TD width=2><IMG height=3 src='images/table04_04.gif' width=2></TD>
					</TR>
					</TBODY>
					</TABLE>
				</TD>
				</TR>
				</TBODY>
				</TABLE>
			</TD>
			</TR>
			</TBODY>
			</TABLE>
		</TD>
		<TD width=13 background=images/table01_bg3.gif>&nbsp;</TD>
		</TR>
		</TBODY>
		</TABLE>
	</TD>
	</TR>
	<TR>
	<TD>
		<TABLE cellSpacing=0 cellPadding=0 width=716 border=0>
		<TBODY>
		<TR>
		<TD width=167><IMG height=49 src='images/table01_03.gif' width=167></TD>
		<TD background=images/table01_bg4.gif>&nbsp;</TD>
		<TD width=13><IMG height=49 src='images/table01_04.gif' width=13></TD>
		</TR>
		</TBODY>
		</TABLE>
	</TD>
	</TR>
	</TBODY>
	</TABLE>
	<TABLE cellSpacing=0 cellPadding=0 width=715 align=center border=0>
	<TBODY>
	<TR>
	<TD vAlign=bottom><IMG height=55 src='images/table02_01.gif' width=76 border=0></TD>
	<TD vAlign=bottom><A href='".$config_bbs_url."' target=_blank><IMG height=55 src='images/table02_02.gif' width=128 border=0></A></TD>
	<TD vAlign=bottom><A href='".$config_bbs_url."' target=_blank><IMG height=55 src='images/table02_03.gif' width=126 border=0></A></TD>
	<TD vAlign=bottom><IMG height=55 src='images/table02_04.jpg' width=231></TD>
	<TD vAlign=bottom><IMG height=74 src='images/table02_05.gif' width=154></TD>
	</TR>
	</TBODY>
	</TABLE>
</TD>
<TD vAlign=top width=144 background=images/right_bg.jpg></TD>
</TR>
</TBODY>
</TABLE>";
require "footer.inc";
?>