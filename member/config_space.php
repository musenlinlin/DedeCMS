<?php 
$needFilter = true;
require_once(dirname(__FILE__)."/../include/config_base.php");

$cfg_egstr = "[\|\"\s\*\.\?\(\)\$ ;,'%]";

//����Ƿ񿪷Ż�Ա����
if($cfg_mb_open=='��'){
	ShowMsg("ϵͳ�ر��˻�Ա���ܣ�������޷����ʴ�ҳ�棡","javascript:;");
	exit();
}

?>