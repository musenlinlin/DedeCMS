<?php
/**
 * 文件查看
 *
 * @version        $Id: file_manage_view.php 1 8:48 2010年7月13日 $
 * @package        DedeCMS.Administrator
 * @founder        IT柏拉图, https: //weibo.com/itprato
 * @author         DedeCMS团队
 * @copyright      Copyright (c) 2007 - 2020, 上海卓卓网络科技有限公司 (DesDev, Inc.)
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once dirname(__FILE__) . "/config.php";
CheckPurview('plus_文件管理器');
require_once DEDEINC . "/oxwindow.class.php";
$activepath = str_replace("..", "", $activepath);
$activepath = preg_replace("#^\/{1,}#", "/", $activepath);
if ($activepath == "/") {
    $activepath = "";
}

if ($activepath == "") {
    $inpath = $cfg_basedir;
} else {
    $inpath = $cfg_basedir . $activepath;
}

//显示控制层
//更改文件名
if ($fmdo == "rename") {
    if ($activepath == "") {
        $ndirstring = "根目录";
    }

    $ndirstring = $activepath;
    $wintitle = "&nbsp;文件管理";
    $wecome_info = "<ul class=\"uk-breadcrumb\"><li><a href=\"file_manage_main.php?activepath=$activepath\">文件浏览器</a></li><li><span>更改文件名</span></li></ul>";
    $win = new OxWindow();
    $win->Init("file_manage_control.php", "js/blank.js", "POST");
    $win->AddHidden("fmdo", $fmdo);
    $win->AddHidden("activepath", $activepath);
    $win->AddHidden("filename", $filename);
    $win->AddTitle("更改文件名，当前路径：$ndirstring");
    $win->AddItem("旧名称：", "<input class=\"uk-input dede-oswindows-input\" name='oldfilename' type='input' id='oldfilename' size='40' value='$filename'>");
    $win->AddItem("新名称：", "<input class=\"uk-input dede-oswindows-input\" name='newfilename' type='input' size='40' id='newfilename'>");
    $winform = $win->GetWindow("ok");
    $win->Display();
}
//新建目录
else if ($fmdo == "newdir") {
    if ($activepath == "") {
        $activepathname = "根目录";
    } else {
        $activepathname = $activepath;
    }

    $wintitle = "&nbsp;文件管理";
    $wecome_info = "<ul class=\"uk-breadcrumb\"><li><a href=\"file_manage_main.php?activepath=$activepath\">文件浏览器</a></li><li><span>新建目录</span></li></ul>";
    $win = new OxWindow();
    $win->Init("file_manage_control.php", "js/blank.js", "POST");
    $win->AddHidden("fmdo", $fmdo);
    $win->AddHidden("activepath", $activepath);
    $win->AddHidden("token", make_hash());
    $win->AddTitle("当前目录 $activepathname ");
    $win->AddItem("新目录：", "<input class=\"uk-input dede-oswindows-input\" name='newpath' type='input'  id='newpath'>");
    $winform = $win->GetWindow("ok");
    $win->Display();
}

//移动文件
else if ($fmdo == "move") {
    $wintitle = "&nbsp;文件管理";
    $wecome_info = "<ul class=\"uk-breadcrumb\"><li><a href=\"file_manage_main.php?activepath=$activepath\">文件浏览器</a></li><li><span>移动文件</span></li></ul>";
    $win = new OxWindow();
    $win->Init("file_manage_control.php", "js/blank.js", "POST");
    $win->AddHidden("fmdo", $fmdo);
    $win->AddHidden("activepath", $activepath);
    $win->AddHidden("filename", $filename);
    $win->AddTitle("新位置前面不加'/'表示相对于当前位置，加'/'表示相对于根目录。");
    $win->AddItem("被移动文件：", $filename);
    $win->AddItem("当前位置：", $activepath);
    $win->AddItem("新位置：", "<input class=\"uk-input dede-oswindows-input\" name='newpath' type='input'  id='newpath' size='40'>");
    $winform = $win->GetWindow("ok");
    $win->Display();
}

//删除文件
else if ($fmdo == "del") {
    $wintitle = "&nbsp;文件管理";
    $wecome_info = "<ul class=\"uk-breadcrumb\"><li><a href=\"file_manage_main.php?activepath=$activepath\">文件浏览器</a></li><li><span>删除文件</span></li></ul>";
    $win = new OxWindow();
    $win->Init("file_manage_control.php", "js/blank.js", "POST");
    $win->AddHidden("fmdo", $fmdo);
    $win->AddHidden("activepath", $activepath);
    $win->AddHidden("filename", $filename);
    if (@is_dir($cfg_basedir . $activepath . "/$filename")) {
        $wmsg = "你确信要删除目录：$filename 吗？";
    } else {
        $wmsg = "你确信要删除文件：$filename 吗？";
    }
    $win->AddTitle("删除文件确认");
    $win->AddMsgItem($wmsg, "50");
    $winform = $win->GetWindow("ok");
    $win->Display();
}

//编辑文件
else if ($fmdo == "edit") {
    if (!isset($backurl)) {
        $backurl = "";
    }

    $activepath = str_replace("..", "", $activepath);
    $filename = str_replace("..", "", $filename);
    $file = "$cfg_basedir$activepath/$filename";
    $content = "";
    if (is_file($file)) {
        $fp = fopen($file, "r");
        $content = fread($fp, filesize($file));
        fclose($fp);
        $content = dede_htmlspecialchars($content);
    }
    $contentView = "<textarea name='str' id='str' style='width:100%;height:100%;' uk-height-viewport=\"expand: true\">$content</textarea>\r\n";
    $GLOBALS['filename'] = $filename;
    $path_parts = pathinfo($filename);
    if ($path_parts['extension'] == 'php') {
        $GLOBALS['extension'] = 'text/x-php';
    } else if ($path_parts['extension'] == 'js') {
        $GLOBALS['extension'] = 'text/javascript';
    } else if ($path_parts['extension'] == 'css') {
        $GLOBALS['extension'] = 'text/css';
    } else {
        $GLOBALS['extension'] = 'text/html';
    }
    $GLOBALS['token'] = make_hash();
    $ctp = new DedeTagParse();
    $ctp->LoadTemplate(DEDEADMIN . "/templets/file_edit.htm");
    $ctp->display();
}

//新建文件
else if ($fmdo == "newfile") {
    $content = "";
    $GLOBALS['filename'] = "newfile.txt";
    $contentView = "<textarea name='str' id='str' style='width:100%;height:100%;' uk-height-viewport=\"expand: true\"></textarea>\r\n";
    $GLOBALS['token'] = make_hash();
    $ctp = new DedeTagParse();
    $ctp->LoadTemplate(DEDEADMIN . "/templets/file_edit.htm");
    $ctp->display();
}

//上传文件
else if ($fmdo == "upload") {
    $ctp = new DedeTagParse();
    $ctp->LoadTemplate(DEDEADMIN . "/templets/file_upload.htm");
    $ctp->display();
}
