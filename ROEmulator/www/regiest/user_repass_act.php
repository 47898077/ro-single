<?PHP
include('config.php');
if (!empty($_POST['act'])) {
	$id = $_POST['id'];
	$oldpass = $_POST['oldpass'];
	$pass = $_POST['pwd'];
	$pass2 = $_POST['pwd1'];
	$email = $_POST['email'];

	$RegPD = 0;
	if (md5($_POST['md5lock']) != $_POST['md5lockx']) {
		$TempString1="<BR><font color='#ff0000'>��֤�����</font>";
		$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
		$RegPD = 1;
	}
	if (!isAlNum($id)) {
		$TempString1="<font color='#ff0000'>��������û����������ֻ�Ӣ��</font>";
		$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
		$RegPD = 1;
	}
	if (strlen($id) <4 and $RegPD != 1) {
		$TempString1="<font color='#ff0000'>��������û�������4���ַ�</font>";
		$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
		$RegPD = 1;
	}
	if (strlen($oldpass) <6 or strlen($pass) <6 or strlen($pass2) <6 and $RegPD != 1) {
		$TempString1="<font color='#ff0000'>���������������6���ַ�</font>";
		$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
		$RegPD = 1;
	}
	if (!ismail($email) and $RegPD != 1) {
		$TempString1="<font color='#ff0000'>���EMAIL��ʽ����</font>";
		$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
		$RegPD = 1;
	}
	if ($pass != $pass2 and $RegPD != 1) {
		$TempString1="<font color='#ff0000'>��������������������벻һ��</font>";
		$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
		$RegPD = 1;	
	}
	if ($RegPD != 1) {
		$query = "select * from login where username='$id'";
		$result = mysql_query($query);
		while ($r=mysql_fetch_array($result)) {
		$username = $r['username'];
		$password = $r['password'];
		$user_email = $r['email'];
		}

		if ($id == $username and $oldpass == $password and $email == $user_email) {
		$query = "UpDate login Set password='$pass' Where username='$id'";
		$result = mysql_query($query);
			if ($result) {
				$TempString1="<font color='#ff0000'>�޸ĳɹ���������Ʊ�����������</font>";
				$TempString2="<BR><BR><A href='index.php'target='_top'>����</a>";
			} Else {
				$TempString1="<font color='#ff0000'>�޸�ʧ��,��������д����</font>";
				$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
			}
		} Else {
				$TempString1="<font color='#ff0000'>�û����������EMAIL����</font>";
				$TempString2="<BR><BR><A href='user_repass.php'>����</a>";
		}
	}
} Else {
	$TempString1="<font color='#ff0000'>�������,5��󷵻�.</font>";
	$TempString2="<META http-equiv=refresh content='5; url=user_repass.php'>";
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
