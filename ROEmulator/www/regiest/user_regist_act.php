<?PHP
include('config.php');
if (!empty($_POST['act'])) {
	$id = $_POST["id_N"];
	$pass1 = $_POST["pwd_P"];
	$pass2 = $_POST["pwd1_P"];
	$email = $_POST["email_E"];
	$sex = $_POST["sex"];
	
	$RegPD = 0;
	if (md5($_POST['md5lock']) != $_POST['md5lockx']) {
		$TempString1="<BR><font color='#FF0000'>��֤�����</font>";
		$TempString2="<BR><BR><a href='user_regist.php'>����һҳ</a>";
		$RegPD = 1;
	}
	if (!isAlNum($id)) {
		$TempString1="<BR><font color='#FF0000'>��ʹ�����ֻ�Ӣ�����û���</font>";
		$TempString2="<BR><BR><A href='user_regist.php'>����</a>";
		$RegPD = 1;
	}
	if (strlen($id) <4 and $RegPD != 1) {
		$TempString1="<BR><font color='#FF0000'>�û�����������4���ַ�</font>";
		$TempString2="<BR><BR><A href='user_regist.php'>����</a>";
		$RegPD = 1;
	}
	if (strlen($pass1) <6 or strlen($pass2) <6 and $RegPD != 1) {
		$TempString1="<BR><font color='#FF0000'>���������������6���ַ�</font>";
		$TempString2="<BR><BR><A href='user_regist.php'>����</a>";
		$RegPD = 1;
	}
	if (!ismail($email) and $RegPD != 1) {
		$TempString1="<BR><font color='#FF0000'>���EMAIL��ʽ����</font>";
		$TempString2="<BR><BR><A href='user_regist.php'>����</a>";
		$RegPD = 1;
	}
	if ($pass1 != $pass2 and $RegPD != 1) {
		$TempString1="<BR><font color='#FF0000'>�����������벻��</font>";
		$TempString2="<BR><BR><A href='user_regist.php'>����</a>";
		$RegPD = 1;
	}
	if ($RegPD != 1) {
		$query="select username from login where username='$id'";
		$check = mysql_query($query,$connect);
		$total_count = mysql_affected_rows();
		if($total_count>=1) {
		$TempString1="<BR><font color='#FF0000'>��ע����û����Ѵ���</font>";
		$TempString2="<BR><BR><A href='user_regist.php'>����</a>";
		$RegPD = 1;
		}
		if ($RegPD != 1) {
		$query="insert into login (account_id, userid, user_pass, sex, email,level) values ('$accountno','$id','$pass1','$sex','$email','0')";
		$result = mysql_query($query);
			if ($result) {
				$TempString1="<BR><font color='#FF0000'>�ʺ�ע��ɹ�����ʼ�����ɾ�֮�ðɣ�</font>";
				$TempString2="<BR><BR><A href='index.php'target='_top'>����</a>";
			}else{
				$TempString1="<BR><font color='#FF0000'>ע��ʧ��,��������д����</font>";
				$TempString2="<BR><BR><A href='user_regist.php'>����</a>";
			}
		}
	}
} Else {
	$TempString1="<font color='#FF0000'>�������,5��󷵻�.</font>";
	$TempString2="<META http-equiv=refresh content='5; url=user_regist.php'>";
}
require "inc/user_header.inc";
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
