<?
require_once(dirname(__FILE__)."/config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ա��¼</title>
<link href="base.css" rel="stylesheet" type="text/css">	
</head>
<body leftmargin="0" topmargin="0">
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FFFFFF"> 
<td height="50" colspan="3"><img src="img/member.gif" width="320" height="46"></td>
</tr>
<tr> 
<td width="17" rowspan="2" valign="bottom" bordercolor="#FFFFFF" bgcolor="#808DB5">&nbsp; 
</td>
<td width="168" bordercolor="#FFFFFF" bgcolor="#808DB5">&nbsp;</td>
    <td width="575" align="right"><a href="/"><u>��վ��ҳ</u></a></td>
</tr>
<tr> 
<td colspan="2" valign="top">
<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#000000">
<tr> 
<td height="238" align="center" valign="top" bgcolor="#FFFFFF"> 
<table width="98%" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td height="10"></td>
</tr>
<tr> 
<td height="24"><font color="#333333"> <strong>��Ա��¼��</strong></font></td>
</tr>
<form name='form1' method='POST' action='index_do.php'>
<input type="hidden" name="fmdo" value="login">
<input type="hidden" name="dopost" value="login">
<input type="hidden" name="gourl" value="<?if(!empty($gourl)) echo $gourl;?>">
<tr> 
<td valign="top"> <table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr> 
<td width='60%' height="60">�û����� 
<input name='userid' type='text' size='12' style='height:18;width:90'> 
&nbsp;���룺 
<input name='pwd' type='password' size='12' style='height:18;width:90'> 
&nbsp;��֤�룺 
<input name="vdcode" type="text" id="vdcode" style='height:18;width:50'> 
</td>
<td width='11%'><img src='../include/validateimg.php' width='50' height='20'> 
</td>
<td width='9%'><input name='imageField2' type='image' src='img/log.gif' width='48' height='18' border='0' class='input_img'></td>
<td width='20%'><a href='index_do.php?fmdo=user&dopost=regnew'>[<u>ע���»�Ա</u>]</a></td>
</tr>
</table></td>
</tr>
</form>
<form name='form2' action="index_do.php">
<input type="hidden" name="fmdo" value="login">
<input type="hidden" name="dopost" value="getpwd">
<tr> 
<td height="30" valign="top">
<hr size="1">
</td>
</tr>
<tr> 
<td height="24" valign="top"><strong>ȡ�����룺</strong>����֤����д��Ա��¼����ʾ��ͼƬ�ϵ���ĸ��</td>
</tr>
<tr> 
<td height="57" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="1">
<tr> 
<td width="32%" height="36">���������ҵ����룬���������Email�� </td>
<td width="17%"> <input name="email" type="text" id="email" size="15" style='height:18;width:100'> 
</td>
<td width="10%" align="center">��֤�룺 </td>
<td width="13%"><input name="vdcode" type="text" id="vdcode" size="10" style='height:18;width:60'></td>
<td width="12%"><input type="submit" name="Submit" value="ȡ������" class="nb"></td>
<td width="16%">&nbsp; </td>
</tr>
<tr> 
<td height="29" colspan="6">&nbsp;</td>
</tr>
</table></td>
</tr>
</form>
</table>
</td>
</tr>
</table></td>
</tr>
</table>
<p align='center'>
<?=$cfg_powerby?>
</p>
</body>
</html>